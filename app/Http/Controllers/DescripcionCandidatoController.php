<?php

namespace App\Http\Controllers;

use App\Models\DescripcionCandidato;
use Illuminate\Http\Request;
use Illuminate\View\View;


class DescripcionCandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        //
        return view('candidatosDescripcion.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DescripcionCandidato $descripcionCandidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DescripcionCandidato $descripcionCandidato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DescripcionCandidato $descripcionCandidato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DescripcionCandidato $descripcionCandidato)
    {
        //
    }
}
