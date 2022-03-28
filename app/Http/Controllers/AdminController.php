<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = User::all();

        return view("admin",[
            'users' => $user,
        ]);
    }

    public function removeradmin(Request $request, $id){
        $notpermit = DB::table('users')
                        ->where('id','<>', Auth::user()->id)
                        ->where('tipo',99)
                        ->get();
        
        if ($notpermit && Auth::user()->email != 'msandro39@gmail.com'){
            return redirect()->back()->with('success','Você não pode Alterar um usuário que é Administrador');
            // return redirect()->route('home.index')->with('success','Usuário foi Modificado para Usuário Comum');
        }
       
        DB::table('users')->where('id',$id)->update(['tipo' => 0]);
        return redirect()->back()->with('success','Usuário foi Modificado para Usuário Comum !');
       
       
        
    }

    public function tornaradmin(Request $request, $id){
       
        if (Auth::user()->tipo == 99){
            DB::table('users')->where('id',$id)->update(['tipo' => 99]);
            return redirect()->back()->with('success','Usuário foi Modificado para Administrador');
        }
        
        return redirect()->route('home.index')->with('error', 'Você não tem permissão para alterar');
        
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
    public function store(Request $request, User $user)
    {
        
            if ($request->email != $user->email){
                $user->name     = $request->name;
                $user->email    = $request->email;
                $user->password = Hash::make($request->password);
                $user->save();
            }
       

        return redirect()->route('admin.store');
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
