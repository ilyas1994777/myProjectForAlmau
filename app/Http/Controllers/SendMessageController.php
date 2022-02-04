<?php

namespace App\Http\Controllers;

use App\Models\SendMsgModel;
use Illuminate\Http\Request;

class SendMessageController extends Controller{

    function sendMessCtrl(Request $sendMessReq) {


        $sendMsg = new SendMsgModel();
        $randomCount = mt_rand(1, 1500);

        if($sendMessReq->isMethod('post')){
            if($sendMessReq->hasFile('userfile')) {
                $file = $sendMessReq->file('userfile');
                $file->move(public_path() . '/storage','filename'.$randomCount.'.txt');
//                dd("qwe");
            }
        }
//            dd(public_path());

           $res = $sendMsg->sendMessage(
                                           $sendMessReq->input("description"),
                                           $sendMessReq->input("user_id"),
                                           $sendMessReq->input("submit"),
                                           "/storage/filename".$randomCount.".txt"
                                       );
            if($res == "OK")
               return redirect()->back()->with('message','Yes');
            else
                return redirect()->back()->with('message','No');

    }

}
