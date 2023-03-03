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
       return redirect('/scan')->with('gagal', $cek->name);
      }
      else {
         return redirect('/scan')->with('sucess', 'Document Non Authentique');
      }
     
   }

   public function scan(){
    return view('scan');
   }
  }

