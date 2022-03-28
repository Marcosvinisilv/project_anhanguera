<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoacoesController extends Controller
{
    public function index (){
        return view('doacoes');
    }
}
