<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    // Fillable é uma varivel do laravel para dizer em quais campos do banco de dados eu tenho autorização
    // para manipular
    protected $fillable = [
        'nome','imagem','description','created_at','updated_at'
    ];

    //Cria um novo Atributto no nosso objeto json para manipular a quantidade para comprar com o contador
    // do botão carregarMais.
    protected $appends =[
        'count_able'
    ];
    
    public function getcountAbleAttribute()
    {
        //Retorna a Quantidade de Registros do banco de Dados.
        return Classes::all()->count();
    }

    static public function listClassesOnLimit($inicio,$max){
        //Aqui agente traz apenas o limit de imagems que eu coloquei em uma função ajax na pasta public/js/
        return Classes::offset($inicio)->limit($max);
    }

    static public function insertClasse($nome,$descricao,$imagem){
        // Se o nome não estiver em branco e a imagem não estiver em branco
        // Então eu cadastro os dados no banco de dados.
        if ($nome > "" && $imagem > ""){
            return Classes::create([
                'nome'        => $nome,
                'description' => $descricao,
                'imagem'      => $imagem
            ]);
        }
        //Se Não retorno false;
        return false;
        
    }
}
