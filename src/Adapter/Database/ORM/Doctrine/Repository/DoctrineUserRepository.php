<?php

declare(strict_types=1);

namespace App\Adapter\Database\ORM\Doctrine\Repository;

use App\Domain\Entity\User;
use App\Domain\Repository\UserRepository;

class DoctrineUserRepository implements UserRepository
{
    public function save(User $user): void
    {
        // persist into database
    }
}
