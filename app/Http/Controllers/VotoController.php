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


        $search_candidato = null;

        $user_current = auth()->user();
        $user_current_id = $user_current->id;

        $user_voto_current = Voto::where('user_id',$user_current_id)->count();

        $candidatos = Candidato::withCount('votos')->orderByDesc('votos_count')->get();

        $candidatoGanador = $candidatos->first();

        $user_get_voto = Voto::where('user_id',$user_current_id)->first();


        if($user_get_voto) {

            $get_candidato = $user_get_voto->candidato_id;
            $search_candidato_get = Candidato::where('id',$get_candidato)->get();

            $search_candidato = $search_candidato_get;
            
        }

        


        return view('votos.index', compact('candidatos','candidatoGanador','user_voto_current','search_candidato'));

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
