<?php

declare(strict_types=1);

namespace App\Domain\Entity;

class User
{
    public function __construct(
        private readonly string $name,
        private readonly ?string $email,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
}
