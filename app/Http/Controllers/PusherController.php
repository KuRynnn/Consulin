<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Events\PusherBroadcast;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index()
    {
        return view('public.realtime-chat.index');
    }
    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();
        return view('public.realtime-chat.broadcast',['message'=>$request->get('message')]);
    }
    public function receive(Request $request)
    {
        return view('public.realtime-chat.receive',['message'=>$request->get('message')]);
    }

}
