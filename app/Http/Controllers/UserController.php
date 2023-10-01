<?php

namespace App\Http\Controllers;

use App\DTO\CreatePhoneDTO;
use App\DTO\CreateUserDTO;
use App\Http\Requests\StoreUpdatePhone;
use App\Http\Requests\StoreUpdateUser;
use App\Services\PhoneService;
use App\Helpers\ValidadeUser;
use Illuminate\Http\Request;
use App\Services\PublicPlaceService;
use App\Services\StateService;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct(
        protected PublicPlaceService $public_place,
        protected StateService $state,
        protected UserService $user,
        protected PhoneService $phone
    ){}

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

    public function store(StoreUpdateUser $request)
    {
        //dd(strlen($request->input('fixed')));
        //dd($request->all());
        //$this->phone->create(CreatePhoneDTO::makeFromRequest($request_phone));
        $user = $this->user->create(CreateUserDTO::makeFromRequest($request));
        //dd($user->id);
        //$user->phone()->create(['fixed' => $request->input('fixed'), 'mobile' => $request->input('mobile')]);

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
