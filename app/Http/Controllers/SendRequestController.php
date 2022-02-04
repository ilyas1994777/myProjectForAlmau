<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageForClientRequestt;
use App\Models\SendRequestModel;
use Illuminate\Http\Request;

class SendRequestController extends Controller{

    function sendReq(MessageForClientRequestt $sendRq) {
        $sendmess = new SendRequestModel();
//        dd("qweqw");

//

        $sendmess->sendRequest(
            $sendRq->input("user_id"),
            $sendRq->input("track_number"),
            $sendRq->input("answeronmess"));

        return redirect()->back()->with('message','отлично, данные были отправлены в БД');


    }

}
