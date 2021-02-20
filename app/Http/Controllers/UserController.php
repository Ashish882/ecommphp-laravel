<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    function login(Request $req ){

    
      //  return $req->input();
      return User::where(['email'=>$req->email])->first();
    }


}
