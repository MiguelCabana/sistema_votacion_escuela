<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //


        $candidato = candidato::all();

        return view('candidatos.index', compact('candidato'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse     
    {
        //
       $validated = $request->validate([
            'apellido_candidato' => 'required|string|max:255',
            'nombre_candidato' => 'required|string|max:255',
            'partido_candidato' => 'required|string|max:255',
       ]);


       $request->user()->candidatos()->create($validated);

       return redirect(route('candidatos.index'))->with('success','¡El candidado ha sido registrado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidato $candidato)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidato $candidato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidato $candidato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidato $candidato)
    {
        //
    }
}
