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

    public function create()
    {
        $legend = "Novo Tipo de Usuário";
        return view('tipo-usuario.create', compact('legend'));
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        if (count($this->model::where('type', $dados['type'])->get()) == 0) {
            $this->model::create($dados);
        }

        return redirect('/tipo-usuario');
    }

    public function edit($id)
    {
        $legend = "Edição Tipo de Usuário";
        $type_user = $this->model::find($id);
        return view('tipo-usuario.edit', compact('type_user', 'legend'));
    }

    public function update(Request $request)
    {
        $dados = $request->all();
        $this->model::find($dados['id_type_user'])->update($dados);

        return redirect('/tipo-usuario');
    }
}
