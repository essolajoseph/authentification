<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class GeneratePdf extends Controller
{
    function index(Request $resquest){
      
    
        @include ('bootstraps');
 
    $dompdf = new Dompdf();
    $user = User::where([
        "id" => "1"
       ])->get();
    
    $dompdf->loadHtml(view('index',compact('user')));

    // $dompdf->setBasePath(__DIR__ . '/css/releve.css"');

    $dompdf->setPaper('A4');
    

    $dompdf->render();
    

    $dompdf->stream("qrcode",[
      "Attachment" => true
  ]);
      return view('index',compact('user'));
 } 
}
