<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegisterModel extends Model
{
    public function addToDB($login, $password) {
        DB::select("INSERT INTO mytable (login, password) VALUES('".$login."','".$password."')");
       $getId =  DB::select("SELECT id FROM mytable WHERE login='".$login."'");
//      echo json_encode($getId);
        DB::select("INSERT INTO userrole (user_id,role_id) VALUES(".$getId[0]->id.", 2)");



    }

}
