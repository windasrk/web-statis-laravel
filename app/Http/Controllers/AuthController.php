<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        return view('welcome');
        //dd($request["fname"]);
    }

    public function welcome_post(Request $request){
         //dd($request->all());
        $nama=$request["firstname"];
        $name=$request["lastname"];
        echo "<h1>Selamat Datang $nama $name</h1>";
        return view('welcome');
    }
}