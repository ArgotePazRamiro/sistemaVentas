<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class personalController extends Controller
{
    public function index(){
        return view('administrador.personal.index',[
            'personal'=>$personal = users::latest()->paginate(10)
        ]);
    }
    public function show(users $personal)
    {
        return view('administrador.personal.show',[
            'personal'=>$personal
        ]);
    }
    public function create()
    {
        return view('administrador.personal.create',[
            'personal'=> new users
        ]);
    }

    public function store()
    {
        $message = users:: create([
            'nombre'=> request('nombre'),
            'aPaterno'=> request('aPaterno'),
            'aMaterno'=> request('aMaterno'),
            'ci'=> request('ci'),
            'celular'=> request('celular'),
            'usuario'=> request('usuario'),
            'password'=> request('password'),
            'rol'=> 'null',
            'estado'=> '1'
        ]);
        return redirect()->route('personal.index');
    }
    public function edit(users $personal){

        return view('administrador.personal.edit',[
            'personal'=> $personal
        ]);
    }
    public function update(users $personal)
    {

        $personal->update([
            'nombre'=> request('nombre'),
            'aPaterno'=> request('aPaterno'),
            'aMaterno'=> request('aMaterno'),
            'ci'=> request('ci'),
            'celular'=> request('celular'),
            'usuario'=> request('usuario'),
            'password'=> request('password'),
            'rol'=> 'null',
            'estado'=> '1'
        ]);

        return redirect()->route('personal.index', $personal);    } 
    
    public function destroy(users $personal)
    {
        $personal->delete();
        return redirect()->route('personal.index');

    }
}
