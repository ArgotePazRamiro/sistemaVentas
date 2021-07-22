<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class roleController extends Controller
{

    public function index(){
        $roles = Role::latest()->paginate(10);
        return view('admin.role.index', compact('roles'));
    }

    public function create(){
        $permissions = Permission::all();
        return view('admin.role.create', compact('permissions'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $role = Role::create($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index')->with('info', 'El rol se creo con exito');
    }

    public function edit(Role $role){
        $permissions = Permission::all();
        return view('admin.role.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $roleid){
        $role = Role::find($roleid);
        $request->validate([
          'name' => 'required',
        ]);
        $role->update($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index')->with('info', 'El rol se actualizo con exito');
      }

      public function destroy(Role $role){
        $role->delete();
        return redirect()->route('roles.index')->with('info', 'El rol se elimino con exito');
      }
}
