<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{

    protected $table = "Knowledges"; //sobrescreve o padrão do laravel do nome da tabela (se necessário)
    //public $timestamps = false; //caso não tenha colocado os timestamps nessa tabela

    public function professionals(){
        return $this.belongsToMany('App\Professional','professionals_knowledges','knowledge_id','professional_id');
    }

}
