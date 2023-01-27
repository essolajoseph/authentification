<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $user=User::get();
        return view('home',compact('user'));
    }
}
