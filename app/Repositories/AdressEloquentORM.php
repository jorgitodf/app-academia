<?php

namespace App\Repositories;

use App\DTO\CreateAdressDTO;
use App\Models\Adress;
use stdClass;
use App\Repositories\AdressRepositoryInterface;

class PhoneEloquentORM implements AdressRepositoryInterface
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
        $phone = $this->model->create((array) $dto);

        return (object) $phone->toArray();
    }
}
