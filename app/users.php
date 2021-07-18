<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class users extends Model
{
    
    protected $fillable = ['id','nombre', 'aPaterno', 'aMaterno', 'ci','celular','usuario','password','rol','estado'];
    protected $table = 'users';
}
