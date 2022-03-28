<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index () {
        $description = [
            
            "DESCMSOUZA" => "Olá, me chamo Marcos Sandro Moreno Botelho de Souza",
            "DESCLUIS"   => "Olá, me chamo Luis Shicker",
            "DESCJUCY"   => "Olá, me chamo Juciele Santos",
            "DESCMVINI"  => "Olá, me chamo Marcos Vinicius"
        ];
        return view('welcome',compact([
            'description'
        ]));
    }
    
}
