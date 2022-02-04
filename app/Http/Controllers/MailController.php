<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() {
//        Mail::send(['text' => 'mail'], ['name', 'WEB dev blog'], function ($message){
//            $message->to('iliyas1994777@mail.ru', 'To web dev blog')->subject('Test Email');
//            $message->from('admin', 'admimadmin');
//        });
        Mail::send(['text' => 'mail'], ['name', 'WEB dev blog'], function($message){
            $message->to('iliyas1994777@mail.ru')->subject('eqweqw');
        })
        ->with('title', "Registered Successfully.");
    }
}
