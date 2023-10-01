<?php

namespace App\Repositories;

use App\DTO\CreateUserDTO;
use stdClass;

interface UserRepositoryInterface
{
    public function getAll(string $filter = null): array;
    //public function findOne(int $id): stdClass|null;
    public function create(CreateUserDTO $dto): stdClass;
    //public function update(UpdateTypeUserDTO $dto): stdClass|null;
    //public function paginate(int $page = 1, int $totalPerPage = 4, string $filter = null): PaginationInterface;
}
