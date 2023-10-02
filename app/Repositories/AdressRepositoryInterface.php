<?php

namespace App\Repositories;

use App\DTO\CreateAdressDTO;
use stdClass;

interface AdressRepositoryInterface
{
    public function getAll(string $filter = null): array;
    public function create(CreateAdressDTO $dto): stdClass;
}
