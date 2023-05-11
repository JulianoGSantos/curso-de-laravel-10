<?php

use App\Models\Doubt;
use App\Repositories\SupportRepositoryInterface;

class SupportEloquentORM implements SupportRepositoryInterface
{
    public function __construct(
        protected Doubt $model
    ){}

    public function getAll(string $filter = null): array;
    {
         return $this->model->paginate()->toArray();
    }
    
    public function findOne(string $id): stdClass|null;
    {
         
    }
    public function delete(string $id): void;
    {
         
    }
    public function new(CreateSupportDTO $dto): stdClass;
    {
         
    }
    public function update(UpdateSupportDTO $dto): stdClass|null;
    {
         
    }
}