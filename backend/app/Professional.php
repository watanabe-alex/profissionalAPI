<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    
    protected $table = "professionals"; //sobrescreve o padrão do laravel do nome da tabela (se necessário)

    public function knowledges(){
        return $this->belongsToMany('App\Knowledge','professionals_knowledges','professional_id','knowledge_id');
    }

}
