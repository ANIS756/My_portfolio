<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FrontController extends Controller
{
    //

    public function index(){
        return view('website.home.index');
    }
    public function download($filename)
    {
        $path = public_path($filename);

        return Response::download($path);
    }
}
