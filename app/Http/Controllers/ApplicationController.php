<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request){
        if($request->hasFile('file')){
            //
        }
       $application - Application::create([
           'subject' => $request->subject,
           'message' => $request->message,
           'file' 
       ]);
    }
}
