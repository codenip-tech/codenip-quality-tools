<?php

declare(strict_types=1);

namespace App\Application\UseCase\User;

use App\Domain\Entity\User;
use App\Domain\Repository\UserRepository;

class CreateUser
{
    public function __construct(
        private readonly UserRepository $userRepository,
    ) {}

    public function create(string $name, ?string $email): void
    {
        $user = new User($name, $email);

        $this->userRepository->save($user);
    }
}
