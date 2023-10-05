<?php

namespace App\Services;

use App\DTO\CreateCitieDTO;
use App\Repositories\CitieRepositoryInterface;
use stdClass;

class CitieService
{
    public function __construct(protected CitieRepositoryInterface  $repository)
    {

    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function create(CreateCitieDTO $dto): stdClass
    {
        return $this->repository->create($dto);
    }

    public function findOne(string $name, int $state_id): stdClass|null
    {
        return $this->repository->findOne($name, $state_id);
    }
}
