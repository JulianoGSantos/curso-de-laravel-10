<?php

namespace App\DTO;

use App\Http\Requests\DoubtRequest;
use SplSubject;

class UpdateSupportDTO
{
    public function __construct(
        public string $id,
        public string $subject,
        public string $description,
    )
    {}

    public static function makeFromRequest(DoubtRequest $request): self
    {
        return new self(
            $request->id,
            $request->subject,
            $request->description,
        );
    }
}