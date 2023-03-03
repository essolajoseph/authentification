<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ScanController extends Controller
{
   

     public function store (Request $request){
      $cek= User::where([
        'name' => $request->id_siswa,
      ])->first();
      if($cek){
      
        $user=[
            'name' =>'essola'.$request->id_siswa,
            'email' =>'essolajoseph'.$request->id_siswa,
            'password' =>'essola'.$request->id_siswa,
        ];
        User::insert($user);
       return redirect('/scandoc')->with('gagal', $cek->name);
      }
      else {
         return redirect('/scan')->with('sucess', 'Document Non Authentique');
      }
     
   }

   public function scan(){
    return view('scan');
   }
  }

