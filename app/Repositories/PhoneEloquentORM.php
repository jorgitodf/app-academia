<?php

namespace App\Repositories;

use App\DTO\CreatePhoneDTO;
use App\Models\Phones;
use stdClass;
use App\Repositories\PhoneRepositoryInterface;

class PhoneEloquentORM implements PhoneRepositoryInterface
{
    public function __construct(protected Phones $model)
    {}

    public function getAll(string $filter = null): array
    {
        return $this->model
                    ->all()
                    ->toArray();
    }

    public function create(CreatePhoneDTO $dto): stdClass
    {
        $phone = $this->model->create((array) $dto);

        return (object) $phone->toArray();
    }
}
