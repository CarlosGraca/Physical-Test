<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'user_fk','name','email','telefone','telemovel','dt_test','dt_nasc','age','sexo','estatura','peso','imc','gordura','peso_gordura','massa_magra','circunferencia','cintura','quadril','coxa','panturrilha','rel_cin_qua','taxa_matabolica','frequesia','pressao_sis','pressao_dis','potencia_aerobica','forca_abdominal','forca_mmii','flexibilidade','forca_mmss'
    ];
}
