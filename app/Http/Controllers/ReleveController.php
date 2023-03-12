<?php

namespace App\Http\Controllers;

use App\Models\Releve;
use Illuminate\Http\Request;

class ReleveController extends Controller
{
    public function index(){
        $chaine=Releve::all();
        return response()->json($chaine);
    }

    public function store(Request $request){
      $notGet=false;
      $request->validate([
        'chaine' => 'required'
      ]);
      $getString= Releve::where('chaine',$request->chaine); 
      if($getString){
        return response()->json($request->chaine);
      }
      else {
        return response()->json($notGet);
      }
    }
}
