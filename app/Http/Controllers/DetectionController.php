<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Question;

class DetectionController extends Controller
{
    public function index()
    {
        $questions = Question::with([
            'questionAnswers' => function ($q) {
                $q->where('user_id', Auth::user()->id);
            },
        ])->get();

        return view('patient.detections.index', compact('questions'));
    }

    public function store(Request $request)
    {
        $instanceRequest = [];
        $instanceQuestionId = [];
        foreach ($request->anxiety_text as $key => $value) {
            if (!empty($value)) {
                $instanceRequest[] = $value;
                $instanceQuestionId[] = $key;
            }
        }

        if (count($instanceRequest) == 0) {
            return redirect()->back();
        }

        $url = env('APP_ML_URL') . '/v1/models/DAM:predict';

        $res = cURLPost(
            $url,
            [
                'instances' => $instanceRequest,
            ],
            [],
        );

        if (!$res) {
            return redirect()
                ->back()
                ->withErrors(['anxiety_text' => 'Server tidak bisa dijangkau'])
                ->withInput();
        }
        $res = json_decode($res);

        if (!isset($res->predictions)) {
            return redirect()
                ->back()
                ->withErrors(['anxiety_text' => 'Terdapat kesalahan internal'])
                ->withInput();
        }

        $insertData = [];
        foreach ($res->predictions as $key => $value) {
            $answer = QuestionAnswer::where('user_id', Auth::user()->id)
                ->where('question_id', $instanceQuestionId[$key])
                ->first();
            if (isset($answer)) {
                if ($answer->answer != $instanceRequest[$key]) {
                    $answer->update([
                        'answer' => $instanceRequest[$key],
                        'score' => $value[0],
                        'updated_at' => now(),
                    ]);
                }

                continue;
            }

            $insertData[] = [
                'user_id' => Auth::user()->id,
                'question_id' => $instanceQuestionId[$key],
                'answer' => $instanceRequest[$key],
                'score' => $value[0],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        QuestionAnswer::insert($insertData);

        return redirect()->back();
    }
}
