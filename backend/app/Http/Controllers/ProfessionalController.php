<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;

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

        return response()->json($result);
    }

}
