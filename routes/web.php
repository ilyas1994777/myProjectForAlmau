<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CompleteRegistrationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SendMessageController;
use App\Http\Controllers\SendRequestController;
use Illuminate\Support\Facades\Route;



Route::get('/authorization', function () {
    return view('authorization');
});


Route::get('admin/generalpageForAdmin', function () {
    return view('admin/generalpageForAdmin');
});

//Route::get('/generalpageForClient', function () {
//    return view('generalpageForClient');
//});


//Route::get('qwe', [AuthorizationController::class, 'authorization'])->name('generalpageForAdmin');


Route::get('zxc', [CompleteRegistrationController::class, 'savetodb'])->name('savetodb');


Route::get('fff', [RegistrationController::class, 'registration'])->name('registration');


Route::get('qwe', [AuthorizationController::class, 'authorization'])->name('authorization');

Route::post('123', [SendMessageController::class, 'sendMessCtrl'])->name('sendMsg');

Route::get('asd2', [SendRequestController::class, 'sendReq'])->name('send_request');


Route::get('asd', [\App\Http\Controllers\ddonwloadController::class, 'getDownload'])->name('downloadFile');

Route::get("ttt", [\App\Http\Controllers\MailController::class, 'send'])->name('sbrospass');

