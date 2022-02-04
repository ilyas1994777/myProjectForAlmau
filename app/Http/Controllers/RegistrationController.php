<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnectRequest;
use App\Models\RegisterModel;
use Illuminate\Http\Request;

class RegistrationController extends Controller{

    public function registration() {
//
        return view('registration');
    }

}
