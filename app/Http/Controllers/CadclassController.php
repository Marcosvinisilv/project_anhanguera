<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CadclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna a Visão da Pagina Cadastrar Classes;
        return view('cadclass');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Recebemos oque vem do Input do Formulário pelo Request.
        $nome = $request->nomeclass;
        $descricao = $request->infoclass;
        //Remove os Acentos para depois trabalhar com o JSON
        $newdesc = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $descricao);
        //Validamos os tipos de arquivos de imagem. abaixo : formatos aceitos.
        $validate =   $request->validate([
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
       
        //Verificamos se o nome está em branco ou nulo exibmos uma mensagem de erro. * campo obrigatório *
        if ($nome == "" ||  $nome == null){
            return redirect()->back()->with('error', 'Falha ao Cadastrar, Preencha o Nome.');
        }

        //Verificamos se a descrição está em branco ou nula exibimos uma mensagem de erro. * campo obrigatório *
        if ($newdesc == "" || $newdesc == null){
            return redirect()->back()->with('error', 'Falha ao Cadastrar, Preencha a Descrição.');
        }

        $nameFile = '';
        //Verificamos se está vindo algum aqruivo no campo de imagem Input FILE  E se o arquivo é válido.
        if ($request->hasFile('file') && $request->file('file')->isValid()){

            //Criamos um  id único *hash* para descrição da descrição do arquivo dinamicamente usando uma função abaixo.
            $name = uniqid(date('HisYmd'));
            //Pegamos a Extensão do arquivo.
            $extension = $request->file->extension();
            //Concatenamos os dois arquivos para ficar no formato  * HASH.jpg Exemplo:  91273972137das7731927.jpg* 
            $nameFile = "{$name}.{$extension}";
           
            //Salvamos a imagem no diretório pulibc/storage/uploads/ a imagem . jpg ou outro tipo de arquivo que seja imagem.
            $upload = $request->file->storeAs('uploads', $nameFile, 'public');
            // Se o upload não for por algum motivo, mensagem de falha ao fazer upload.
            if (!$upload){
                return redirect()
                       ->back()
                       ->with('error','Falha ao fazer upload')
                       ->withInput();
            }else{
                // Se não vamos inserir a imagem com uma função statica que vem do nosso modelo " Classes ".
                $class = Classes::insertClasse($nome,$newdesc,$upload);
                //Classe Recebe 3 parametros na função, nome, descricao, e a imagem.

                // E retornamos  que os dados foram inseridos com sucesso.
                return redirect()->back()->with('status', 'Classe Salva com Sucesso !');
            }
        }
        // Se o Input de Imagem estiver sem nada exibimos para selecionar uma imagem.
        return redirect()->back()->with('error','Falha ao cadastrar, selecione uma imagem e/ou válida');

       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
