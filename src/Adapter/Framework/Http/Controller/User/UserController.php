<?php

declare(strict_types=1);

namespace App\Adapter\Framework\Http\Controller\User;

use App\Adapter\Framework\Http\DTO\Request\CreateUserRequest;
use App\Application\UseCase\User\CreateUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function __construct(
        private readonly CreateUser $createUser,
    ) {}

    public function create(CreateUserRequest $request): Response
    {
        $this->createUser->create($request->name, $request->email);

        return $this->json([], Response::HTTP_CREATED);
    }
}
