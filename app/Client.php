<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name','telefone','telemovel','email','sexo','dt_nasc','morada'];


}
