<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AuthorModel extends Model
{


    public function getAllData($login, $pass) {

        $all = DB::select("SELECT role, user_id, login, password
                    FROM role JOIN (
                 SELECT login, user_id, role_id, password
                 FROM `mytable` JOIN userrole ON mytable.id = userrole.user_id
               )as t on role.id = t.role_id where login = '".$login."'");
        if (count($all) > 0){
            if ($pass == $all[0]->password){
                return $all;
            }else {
                return $arr = array();
            }
        }
        return $all;
    }

    function getClientApplication($data) {
//      return  DB::select("SELECT * FROM application WHERE user_id=);
      return  DB::select("SELECT * FROM application WHERE user_id ='".$data[0]->user_id."'");
    }

    function getAdminapplication() {
        return  DB::select("SELECT * FROM application");
    }
}
