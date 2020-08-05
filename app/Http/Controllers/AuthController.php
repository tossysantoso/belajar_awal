<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function regis(){
        return view('register');
    }

    public function welco(Request $request){

       $namadepan = $request->input("namadepan");
       $namabelakang = $request->input("namabelakang");

       $data = [
           "first" => $namadepan,
           "second" => $namabelakang,
       ];

        return view('welcome', $data);

    }

}
