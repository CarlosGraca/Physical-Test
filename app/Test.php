<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'client_id','dt_test','estatura','peso','gordura','dc_tricepts','soma_dc_triceps_subescapular','soma5_dc','circunferencia','cintura','quadril','coxa','panturrilha','peso_corporal_total','peso_a_perder','total_agua_corpo','perc_agua_massa_magra','taxa_metabolica','frequencia_card_rep','pressao_sis','pressao_dis','potencia_aerobica','forca_abdominal','forca_mmii','flexibilidade','forca_mmss'
    ];

    public function client(){
       return $this->belongsTo(Client::class);
    }
}
