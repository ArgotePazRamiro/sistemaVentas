<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
//Laravel Spatie
use Spatie\Permission\Models\Role;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create((['name' => 'Admin']));

        //Persona
        Permission::create(['name' => 'personal.index', 'description' => 'Inicio Personal'])->syncRoles([$admin]);
        Permission::create(['name' => 'personal.create', 'description' => 'Crear Personal'])->syncRoles([$admin]);
        Permission::create(['name' => 'personal.edit', 'description' => 'Editar Personal'])->syncRoles([$admin]);
        Permission::create(['name' => 'personal.destroy', 'description' => 'Eliminar Persnal'])->syncRoles([$admin]);

        //Cliente
        Permission::create(['name' => 'cliente.index', 'description' => 'Inicio Cliente'])->syncRoles([$admin]);
        Permission::create(['name' => 'cliente.create', 'description' => 'Crear Cliente'])->syncRoles([$admin]);
        Permission::create(['name' => 'cliente.edit', 'description' => 'Editar Cliente'])->syncRoles([$admin]);
        Permission::create(['name' => 'cliente.destroy', 'description' => 'Eliminar Cliente'])->syncRoles([$admin]);

        //Producto
        Permission::create(['name' => 'producto.index', 'description' => 'Inicio Producto'])->syncRoles([$admin]);
        Permission::create(['name' => 'producto.create', 'description' => 'Crear Producto'])->syncRoles([$admin]);
        Permission::create(['name' => 'producto.edit', 'description' => 'Editar Producto'])->syncRoles([$admin]);
        Permission::create(['name' => 'producto.destroy', 'description' => 'Eliminar Producto'])->syncRoles([$admin]);

        //Users
        Permission::create(['name' => 'users.index', 'description' => 'Inicio Asignar Rol'])->syncRoles([$admin]);
        Permission::create(['name' => 'users.edit', 'description' => 'Editar Asignar Rol'])->syncRoles([$admin]);

        //Roles
        Permission::create(['name' => 'roles.index', 'description' => 'Inicio Rol'])->syncRoles([$admin]);
        Permission::create(['name' => 'roles.create', 'description' => 'Crear Rol'])->syncRoles([$admin]);
        Permission::create(['name' => 'roles.edit', 'description' => 'Editar Rol'])->syncRoles([$admin]);
        Permission::create(['name' => 'roles.destroy', 'description' => 'Eliminar Rol'])->syncRoles([$admin]);
    }
}
