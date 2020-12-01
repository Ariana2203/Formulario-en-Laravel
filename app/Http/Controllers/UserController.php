<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function login(){
        request()->validate([
        'user'=> 'required',
        'password' => 'required'

        ]);
    return 'Datos validos';
    }    
    

}
