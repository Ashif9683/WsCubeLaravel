<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistraitionController extends Controller
{
    public function index(){
        return view("form");
    } 
    public function register(Request $request){
        echo "<pre>";
        print_r($request->all());
        logger("Request Data ---- : " . json_encode($request->all()));
    }
    
}
