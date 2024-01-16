<?php

declare(strict_types=1);

namespace App\Adapter\Framework\Http\DTO\Request;

use Symfony\Component\HttpFoundation\Request;

use function json_decode;

readonly class CreateUserRequest
{
    public function __construct(
        public string $name,
        public ?string $email,
    ) {}

    public static function createFromRequest(Request $request): self
    {
        $data = json_decode($request->getContent(), true);

        return new self(
            $data['name'],
            $data['email'],
        );
    }
}
