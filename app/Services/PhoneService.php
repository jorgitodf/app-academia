<?php

namespace App\Services;

use App\DTO\CreatePhoneDTO;
use App\Repositories\PhoneRepositoryInterface;
use stdClass;

class PhoneService
{
    public function __construct(protected PhoneRepositoryInterface  $repository)
    {

    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function create(CreatePhoneDTO $dto): stdClass
    {
        return $this->repository->create($dto);
    }
}
