<?php

namespace App\Presentation\User\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

readonly class GetRandomUserController
{
    #[Route(path: '%api_v1_public%/users/random', name: 'generate_random_user')]
    public function getUser(): JsonResponse
    {
        return new JsonResponse('{"a": "a"}');
    }
}
