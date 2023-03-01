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
    public function index(){
        $user=User::get();

        return view('index',compact('user')); }

    public function releve1(){
        return view('releves.releve1');
    }
    public function app(){
        return view('layouts.app');
    }
    public function acceuil(){
        return view('bienvenu');
    }
    
}
