<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moderadorModel extends Model
{
    public function getNames()
    {
        return (object) [
            (object) ["nome" => "Marcos Sandro Moreno Botelho de Souza"],
            (object) ["nome" => "Luis Ricardo"],
            (object) ["nome" => "Juciele Santos"],
            (object) ["nome" => "Marcos Vinícius"],
        ];
    }
}
