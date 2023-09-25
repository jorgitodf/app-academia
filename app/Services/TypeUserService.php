<?php

namespace App\Services;

use App\DTO\CreateTypeUserDTO;
use App\DTO\UpdateTypeUserDTO;
use App\Repositories\TypeUserRepositoryInterface;
use stdClass;

class TypeUserService
{
    public function __construct(protected TypeUserRepositoryInterface $repository)
    {

    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(int $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function create(CreateTypeUserDTO $dto): stdClass
    {
        return $this->repository->create($dto);
    }

    public function update(UpdateTypeUserDTO $dto): stdClass
    {
        return $this->repository->update($dto);
    }

}

