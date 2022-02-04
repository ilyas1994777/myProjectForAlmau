<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompleteRegisterRequest;
use App\Models\RegisterModel;


class CompleteRegistrationController extends Controller{

    public function savetodb(CompleteRegisterRequest $complReg) {

        $fin = new RegisterModel();

        $fin->addToDB($complReg->input("loginreg"), $complReg->input("passwordreg"));

          return redirect('authorization');
}

}
