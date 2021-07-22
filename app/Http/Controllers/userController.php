<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class userController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('can:users.index')->only('index');
        // $this->middleware('can:users.edit')->only('edit', 'update');
    }

    public function index(){
        $usuarios = User::latest()->paginate(10);
        return view('admin.users.index', compact('usuarios'));
    }

    public function edit($usuarioid){
        $user = User::find($usuarioid);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $usuarioid){
        $user = User::find($usuarioid);
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index')->whith('info', 'Se asigno los roles, correspondientes');
    }
}
