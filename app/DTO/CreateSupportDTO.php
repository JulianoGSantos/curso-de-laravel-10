<?php

namespace App\DTO;

use SplSubject;

class CreateSupportDTO
{
    public function __construct(
        public string $subject,
        public string $description,
    )
    {}
}