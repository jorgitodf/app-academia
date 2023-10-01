<?php

namespace App\Services;

use App\DTO\CreateUserDTO;
use App\Repositories\UserRepositoryInterface;
use stdClass;

class UserService
{
    public function __construct(protected UserRepositoryInterface $repository)
    {

    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function create(CreateUserDTO $dto): stdClass
    {
        return $this->repository->create($dto);
    }
}
