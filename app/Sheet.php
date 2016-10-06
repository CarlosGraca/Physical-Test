<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    protected $fillable = ['client_id','status','objective','type_student','training_days','date_start','altura','kg','note'];

    public function client(){
       return $this->belongsTo(Client::class);
    }
}
