<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PsychologistAvailabilityController;
use App\Http\Controllers\User\PsychologistController as UserPsychologistController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PsychologistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DetectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\PusherController;
use Illuminate\Support\Facades\Route;
use App\Constants\UserRole;

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::middleware('guest')->group(function() {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'showLoginForm')->name('login');
        Route::post('/login', 'login');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'showRegistrationForm')->name('register');
        Route::post('/register', 'register');
    });
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('role:'.UserRole::DOKTER)->group(function () {
        Route::get('/psychologist-dashboard', [PsychologistController::class, 'dashboard'])->name('psychologist-dashboard');
        Route::get('/psychologist-profile', [PsychologistController::class, 'profile'])->name('psychologist-profile');
        
        Route::group(['prefix' => 'psychologist-availability', 'controller' => PsychologistAvailabilityController::class], function () {
            Route::get('/', 'index')->name('psychologist-availability');
            Route::post('/store', 'store')->name('psychologist-availability.store');
        }); 

        Route::group(['prefix' => 'mypatients', 'controller' => AppointmentController::class], function () {
            Route::get('/', 'index')->name('mypatients');
            Route::get('/{id}', 'show')->name('mypatients.show');
            Route::post('/{id}/set-complete', 'setComplete')->name('mypatients.set-complete');
        });
    });


    Route::middleware('role:'.UserRole::PASIEN)->group(function () {
        Route::get('/patient-dashboard', function () {
            return view('patient.patient-dashboard');
        })->middleware('auth')->name('patient-dashboard');
        Route::get('/patient-chat', function () {
            return view('patient.patient-chat');
        })->name('patient-chat');
        
        Route::get('/patient-chatroom', function () {
            return view('public.realtime-chat.index');
        })->name('patient-chatroom');
        
        Route::get('/patient-appointment', function () {
            return view('patient.patient-appointment');
        })->name('patient-appointment');
        Route::get('/patient-make-appointment', function () {
            return view('patient.patient-make-appointment');
        })->name('patient-make-appointment');
        Route::get('/patient-chatbot', function () {
            return view('patient.chatbot.chat');
        })->name('patient-chatbot');

        Route::group(['prefix' => 'users/psychologists', 'as' => 'user.psychologist.', 'controller' => UserPsychologistController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}', 'show')->name('show');
            Route::post('/{id}/store', 'store')->name('store');
        });

        Route::group(['prefix' => 'detections', 'as' => 'detection.', 'controller' => DetectionController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::post('/form', 'store')->name('store');
        });
    });

    require __DIR__ . "/chatify/web.php";
});

// Route::controller(PusherController::class)->group(function () {
//     Route::get('/pusher', 'index')->name('pusher');
//     Route::post('/pusher-broadcast', 'broadcast');
//     Route::post('/pusher-receive', 'receive');
// });

// Route::post('send', [ChatBotController::class, 'sendChat']);