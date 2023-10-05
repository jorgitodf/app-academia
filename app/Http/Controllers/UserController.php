<?php

namespace App\Http\Controllers;

use App\DTO\CreateAdressDTO;
use App\DTO\CreatePhoneDTO;
use App\DTO\CreateUserDTO;
use App\Http\Requests\StoreUpdateUser;
use App\Services\AdressService;
use App\Services\CitieService;
use App\Services\NeighborhoodService;
use App\Services\PhoneService;
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
        protected PhoneService $phone,
        protected CitieService $citie,
        protected NeighborhoodService $neighborhood,
        protected AdressService $adress
    ){}

    public function index()
    {
        dd($this->user->getAll());
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
    {   dd($request->all());
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('users');
        $user = $this->user->create(CreateUserDTO::makeFromRequest($request));
        $data['user_id'] = $user->id;
        $this->phone->create(CreatePhoneDTO::makeFromRequest($data));
        $citie = $this->citie->findOne($data['citie'], $data['state_id']);
        $neighborhood = $this->neighborhood->findOne($data['neighborhood'], $citie->id);

        if (($citie->name === $data['citie']) && ($neighborhood->neighborhood === $data['neighborhood'])) {
            $data['neighborhood_id'] = $neighborhood->id;
        }

        $this->adress->create(CreateAdressDTO::makeFromRequest($data));

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
