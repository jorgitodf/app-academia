<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PublicPlaceService;
use App\Services\StateService;

class UserController extends Controller
{
    public function __construct(protected PublicPlaceService $public_place, protected StateService $state)
    {}

    public function index()
    {
        return view('usuario.index');
    }

    public function create_aluno()
    {
        $legend = "Novo Aluno";
        $public_places = $this->public_place->getAll();
        $states = $this->state->getAll();
        return view('usuario.create', compact('legend', 'public_places', 'states'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
