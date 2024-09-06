<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function userHome()
    {
        // return view('home');
        $name = "Mr. Kumar";
        $users = ["Rohit", "Neeraj", "Lokesh"];
        return view('home', ['name' => $name, "users" => $users]);
    }
}
