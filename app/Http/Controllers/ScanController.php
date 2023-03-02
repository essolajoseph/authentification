<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function store(Request $request){
        // $cek= User::where([
        //   'name' => $request->id_siswa,
        // ])->first();
        // if($cek){
        //  return redirect('/scan')->with('gagal', $cek->matricule);
        // }
        // else{
       //  Absen::create(
       //   [            
       //     'id_siswa' => $request->id_siswa,
       //     'tanggal' => date('Y-m-d'),
       //   ]
       //   );
      //   return redirect('/scan')->with('sucess', 'Document Non Authentique');
      //  }

      $test=$request->id_siswa;
      if($test=='Mbiada'){
        $user=[
          [
              "name" => "Mbiada",
              "email" => "yopam@gmail.com",
              "password" => "1324",
          ]
          ];
   
        User::insert($user);
      }
     }

     public function scanner(Request $request){
      $test=$request->id_siswa;
      if($test=='Mbiada'){
        $user=[
          [
              "name" => "Mbiada",
              "email" => "yopam@gmail.com",
              "password" => "1324",
          ]
          ];
   
        User::insert($user);
      }
        return view('scan');
     }
}
