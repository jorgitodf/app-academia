<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PublicPlaceService;

class UserController extends Controller
{
    protected $model;

    public function __construct(protected PublicPlaceService $public_place)
    {}

    public function index()
    {
        return view('usuario.index');
    }

    public function create_aluno()
    {
        $legend = "Novo Aluno";
        dd($this->public_place->getAll());
        return view('usuario.create', compact('legend'));
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
