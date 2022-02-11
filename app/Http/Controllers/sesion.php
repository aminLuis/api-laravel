<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sesion extends Controller
{

public function loginUser(Request $request){

      $email = $request->email;
      $password = $request->password;


    return response(
        [
            'status' => 'OK',
            'email' => $email,
            'password' => $password
        ]
    );
 }

}
