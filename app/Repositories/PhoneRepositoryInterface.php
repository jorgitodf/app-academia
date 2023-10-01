<?php

namespace App\Repositories;

use App\DTO\CreatePhoneDTO;
use stdClass;

interface PhoneRepositoryInterface
{
    public function getAll(string $filter = null): array;
    public function create(CreatePhoneDTO $dto): stdClass;
}
