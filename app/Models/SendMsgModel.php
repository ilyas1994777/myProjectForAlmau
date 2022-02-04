<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SendMsgModel extends Model
{
    public function sendMessage($textarea, $user_id, $submit, $filePath) {

//        как установить дату и время
        date_default_timezone_set('Asia/Almaty');
        $currentData =  Carbon::now();
        $currentData =date("Y:m:d");
//        dd(json_encode($currentData)) ;
       $checkData = DB::select("SELECT data_time FROM application WHERE data_time='".$currentData."' AND user_id=".$user_id);
       if (count($checkData) == 0) {
           DB::select("INSERT INTO application (user_id, theme, message, data_time, path_file) VALUES('".$user_id."', '".$submit."', '".$textarea."', '".$currentData."', '".$filePath."')");
         return "OK";
       } else {
           return "NOT";
       }

    }
}


