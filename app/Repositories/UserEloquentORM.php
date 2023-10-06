<?php

namespace App\Repositories;

use App\DTO\CreateUserDTO;
use App\Models\Adress;
use App\Models\Citie;
use App\Models\Neighborhood;
use stdClass;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserEloquentORM implements UserRepositoryInterface
{
    public function __construct(protected User $model, protected Adress $adress, protected Neighborhood $neighborhood,
        protected Citie $citie)
    {}

    public function getAll(string $filter = null): array
    {
        $user = $this->model
                    ->where(function($query) use ($filter) {
                        if ($filter) {
                            $query->where('name', $filter);
                        }
                    })->with('phones')->with(['adresses'])
                    ->get()
                    ->toArray();

        $user[0]['public_place'] = $this->adress->with(['public_place','neighborhood'])->findOrFail($user[0]['adresses'][0]['id'])['public_place']->toArray();
        $user[0]['neighborhood'] = $this->adress->with('neighborhood')->findOrFail($user[0]['adresses'][0]['id'])['neighborhood']->toArray();
        $user[0]['citie'] = $this->neighborhood->with('citie')->findOrFail($user[0]['adresses'][0]['neighborhood_id'])['citie']->toArray();
        $user[0]['state'] = $this->citie->with('state')->findOrFail($user[0]['citie']['id'])['state']->toArray();
        dd($user);
    }

    public function create(CreateUserDTO $dto): stdClass
    {
        $type_user = $this->model->create((array) $dto);

        return (object) $type_user->toArray();
    }

}
