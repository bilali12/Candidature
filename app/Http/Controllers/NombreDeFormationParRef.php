<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Referentiel;
use Illuminate\Http\Request;

class NombreDeFormationParRef extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        $referentiels = Referentiel::all();
        return view('nombredeformationparref')->with(compact('formations', 'referentiels'));
    }
}
