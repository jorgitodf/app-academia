<?php

namespace App\Http\Controllers;

use App\Models\TypeUser;
use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    protected $model;

    public function __construct(TypeUser $type_user)
    {
        $this->model = $type_user;
    }

    public function index()
    {
        $type_users = $this->model::paginate(5);

        return view('tipo-usuario.index', compact('type_users'));
    }

    public function create(Request $request)
    {
        dd($request->all());
    }

    public function edit($id)
    {
        $legend = "Edição Tipo de Usuário";
        $type_user = $this->model::find($id);
        return view('tipo-usuario.edit', compact('type_user', 'legend'));
    }

    public function update(Request $request)
    {
        dd($request->all());
    }
}
