<?php

namespace App\Http\Controllers;

use App\DTO\CreateTypeUserDTO;
use App\DTO\UpdateTypeUserDTO;
use App\Http\Requests\StoreUpdateTypeUser;
use App\Services\TypeUserService;


class TypeUserController extends Controller
{
    protected $model;

    public function __construct(protected TypeUserService $type_user)
    {}

    public function index()
    {
        $type_users = $this->type_user->getAll();
        return view('tipo-usuario.index', compact('type_users'));
    }

    public function create()
    {
        $legend = "Novo Tipo de Usuário";
        return view('tipo-usuario.create', compact('legend'));
    }

    public function store(StoreUpdateTypeUser $request)
    {
        $this->type_user->create(CreateTypeUserDTO::makeFromRequest($request));

        return redirect()->route('type-user');
    }

    public function edit(int $id)
    {
        $legend = "Edição Tipo de Usuário";
        $type_user = $this->type_user->findOne($id);
        return view('tipo-usuario.edit', compact('type_user', 'legend'));
    }

    public function update(StoreUpdateTypeUser $request, int $id)
    {
        $type_user = $this->type_user->update(UpdateTypeUserDTO::makeFromRequest($request));

        if (!$type_user) {
            return back();
        }

        return redirect('/tipo-usuario');
    }
}
