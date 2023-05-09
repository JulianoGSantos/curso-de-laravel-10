<?php

namespace APP\Services;

use App\DTO\CreateSupportDTO;
use GuzzleHttp\Promise\Create;
use stdClass;

class SupportService
{
    protected $repository;

    public function __construct()
    {
        
    }
    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(
        string $id,
        string $subject,
        string $description,
    ): stdClass|null
    {
        return $this->repository->update(
            $id,
            $subject,
            $description,
        );
    }

    public function delete(string $id): void
    {
        $this->repository->delete();
    }

}