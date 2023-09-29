<?php

namespace App\Services;

use App\Repositories\StateRepositoryInterface;

class StateService
{
    public function __construct(protected StateRepositoryInterface $repository)
    {

    }

    public function getAll(): array
    {
        return $this->repository->getAll();
    }

}
