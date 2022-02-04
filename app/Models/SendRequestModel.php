<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SendRequestModel extends Model
{
    public function sendRequest($user_id, $track_num, $send_request) {
        DB::select(
            "UPDATE application
                    set  send_request = '".$send_request."'
                    where user_id = ".$user_id."
                    and track_number = ". $track_num
        );
    }


}
