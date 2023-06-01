<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(Request $request){
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('temp');
            return response()->json(['path' => $path]);
        } else {
            return response()->json(['error' => 'No image provided'], 400);
        }
    }
}
