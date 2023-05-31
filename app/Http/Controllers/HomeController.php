<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{

    public function homepage()
    {
        $users = User::all();
    //    echo '<pre>';
    //    print_r($users);die;
        return view('homepage', compact('users'));
    }    
}
