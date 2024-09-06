<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request)
    {
        // echo "Add New User";
        echo "Username is " . $request->username;
        echo "<br>";
        echo "User city is " . $request->city;
        echo "<br>";
        echo $request->email;
        // return $request;
    }
}
