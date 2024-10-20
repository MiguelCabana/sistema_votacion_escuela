<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Voto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //

   
        $candidatos = Candidato::withCount('votos')->orderByDesc('votos_count')->get();
        $candidatoGanador = $candidatos->first();


        return view('votos.index', compact('candidatos','candidatoGanador'));

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
            'candidato_id' => 'required',
        ]);

        $request->user()->votos()->create($validated);

        return redirect(route('votos.index'))->with('success', '¡El voto ha sido registrado correctamente!');;


    }

    /**
     * Display the specified resource.
     */
    public function show(Voto $voto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voto $voto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voto $voto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voto $voto)
    {
        //
    }
}
