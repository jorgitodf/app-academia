<?php

namespace App\Repositories;

use App\DTO\CreateAdressDTO;
use App\Models\Adress;
use stdClass;
use App\Repositories\AdressRepositoryInterface;

class AdressEloquentORM implements AdressRepositoryInterface
{
    public function __construct(protected Adress $model)
    {}

    public function getAll(string $filter = null): array
    {
        return $this->model
                    ->all()
                    ->toArray();
    }

    public function create(CreateAdressDTO $dto): stdClass
    {
        $adress = $this->model->with('user')->create([
            'description' => $dto->description,
            'complement' => $dto->complement,
            'number' => $dto->number,
            'zip_code' => $dto->zip_code,
            'neighborhood_id' => $dto->neighborhood_id,
            'public_place_id' => $dto->public_place_id,
            'user_id' => $dto->user_id
        ]);

        $adress = $adress->with('user')->first();

        return (object) $adress->toArray();
    }

}
