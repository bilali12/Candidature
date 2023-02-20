<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Referentiel;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        $referentiels = Referentiel::all();
        return view('formation.index', ['formations'=> $formations])->with(compact('referentiels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $referentiels = Referentiel::all();
        return view('formation.create')->with(compact('referentiels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formation = new Formation();
        $formation->nom = $request->nom;
        $formation->duree = $request->duree;
        $formation->description = $request->description;
        $formation->is_started = intval($request->is_started);
        $formation->date_debut = $request->date_debut;
        $formation->referentiel_id = intval($request->ref);

        $formation->save();
        return redirect('/formation/create')->with('flash_message', 'formation ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formation = Formation::find($id);

        $formation->delete();

        return redirect('/formation/index')->with('flash_message', 'formation supprimée');
    }
}
