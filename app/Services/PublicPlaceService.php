<?php

namespace App\Services;

use App\Repositories\PublicPlaceRepositoryInterface;

class PublicPlaceService
{
    public function __construct(protected PublicPlaceRepositoryInterface $repository)
    {

    }

    public function getAll(): array
    {
        return $this->repository->getAll();
    }

}

