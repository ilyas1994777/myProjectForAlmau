<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ddonwloadController extends Controller
{
    public function getDownload(Request $req)
    {

        $path = "storage/filename1228.txt";
        return  \response()->download($path, basename($path));
    }
}
