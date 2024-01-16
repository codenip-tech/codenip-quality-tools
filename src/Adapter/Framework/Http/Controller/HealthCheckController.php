<?php

declare(strict_types=1);

namespace App\Adapter\Framework\Http\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HealthCheckController extends AbstractController
{
    #[Route('/health-check', name: 'health_check', methods: ['GET'])]
    public function __invoke(): Response
    {
        return $this->json([]);
    }
}
