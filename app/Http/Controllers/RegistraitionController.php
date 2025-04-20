<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class RegistraitionController extends Controller
{
    public function index()
    {
        return view("form");
    }
    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:5',
            'confirmed_password' => 'required|min:5|same:password'
        ]);

        echo "<pre>";
        print_r($request->all());
        logger("Request Data ---- : " . json_encode($request->all()));
    }

}
