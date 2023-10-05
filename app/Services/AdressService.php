<?php

namespace App\Services;

use App\DTO\CreateAdressDTO;
use App\Repositories\AdressRepositoryInterface;
use stdClass;

class AdressService
{
    public function __construct(protected AdressRepositoryInterface  $repository)
    {

    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function create(CreateAdressDTO $dto): stdClass
    {
        return $this->repository->create($dto);
    }
}
