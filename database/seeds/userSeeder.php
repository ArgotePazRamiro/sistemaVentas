<?php

use App\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'Administrador',
            'aPaterno' => 'null',
            'aMaterno' => 'null',
            'ci' => 0,
            'celular' => 0,
            'usuario' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
            'rol' => 'Admin',
            'estado' => 1,
        ])->assignRole('Admin');
    }
}
