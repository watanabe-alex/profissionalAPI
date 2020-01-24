<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\Knowledge;


class ProfessionalController extends Controller
{

    public function allProfessionals(Request $request) {
        $professionals = Professional::all();
        return response()->json($professionals);
    }

    public function createProfessional(Request $request) {
        $professional = new Professional();

        $professional->name = $request->name;
        $professional->github = $request->github;

        $result = $professional->save();

        //adiciona relação do profissional com knowledge na tabela intermediária
        $knowledge = Knowledge::find($request->knowledge);
        if ($knowledge) {
            $knowledge->professionals()->attach($professional->id);
           // $professional->knowledges()->attach($knowledge->id); // Assim não funciona porque é o knowledge que pertence ao profissional
        } else {
            return response()->json(["error"=>"O id do knowledge não existe."]);
        }

        return response()->json($professional);
 
    }

}
