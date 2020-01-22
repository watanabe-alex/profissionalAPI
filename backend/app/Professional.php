<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    
    protected $table = "Professionals"; //sobrescreve o padrão do laravel do nome da tabela (se necessário)

    public function knowledges(){
        return $this.hasMany('App\Knowledge','professionals_knowledges','professional_id','knowledge_id');
    }

}
