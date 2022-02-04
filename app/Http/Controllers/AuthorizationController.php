<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnectRequest;
use App\Models\AuthorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;


class AuthorizationController extends Controller{

    public function authorization(ConnectRequest $conn) {
        $authorModel = new AuthorModel();

       $mydata =  $authorModel->getAllData($conn->input("login"), $conn->input("password"));

        if (count($mydata) > 0){
                if ($mydata[0]->role == "Admin") {
                    $mydata['app']= $authorModel->getAdminapplication();
                    $allfiles = array();

                    for ($i =0; $i < count($mydata['app']); $i++){
//                        dd(json_encode($mydata['app'][$i]->path_file));
                        $headers = array(
                            'Content-Type: application/pdf',
                        );
                        $path = $mydata['app'][$i]->path_file;
                        $response = response('File contents', 200);
                        $response->header('Content-Type', 'application/json');
                        $response->header('Content-Disposition', 'attachment; filename="'.$path .'"');

                        $allfiles[] = response()->download($path, basename($path));
//                         $allfiles[] =response()->download($path);

                    }
                   // dd($response);

                    $mydata['files'] = $allfiles;

                    return view('admin/generalpageForAdmin')->with('response', $mydata);
                } else {
                    $mydata['app']= $authorModel->getClientApplication($mydata);
                    return view('client/generalpageForClient')->with('response', $mydata);
                }
        } else {
            echo "пароль не верный";
            return redirect()->back()->with('message','Неверно введены данные, попробуйте еще раз');
        }

    }





}
