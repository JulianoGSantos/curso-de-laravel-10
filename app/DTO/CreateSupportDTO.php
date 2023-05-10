<?php

namespace App\DTO;

use App\Http\Requests\DoubtRequest;
use SplSubject;

class CreateSupportDTO
{
    public function __construct(
        public string $subject,
        public string $description,
    )
    {}

    public static function makeFromRequest(DoubtRequest $request): self
    {
        return new self(
            $request->subject,
            $request->description,
        );
    }
}