<?php

namespace App\Services;

use App\DTO\CreateNeighborhoodDTO;
use App\Repositories\NeighborhoodRepositoryInterface;
use stdClass;

class NeighborhoodService
{
    public function __construct(protected NeighborhoodRepositoryInterface  $repository)
    {

    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function create(CreateNeighborhoodDTO $dto): stdClass
    {
        return $this->repository->create($dto);
    }

    public function findOne(string $neighborhood, int $citie_id): stdClass|null
    {
        return $this->repository->findOne($neighborhood, $citie_id);
    }
}
