<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
	public $timestamps = true;
	protected $fillable = ['name','email','telefone','telemovel','logo_url','nif','cod_postal','localizacao'];
}
