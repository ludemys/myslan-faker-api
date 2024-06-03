<?php

namespace App\Presentation\User\Controller;

use App\Application\User\Service\GenerateRandomUserService;
use App\Domain\ValueObject\Exception\ValueObjectValidationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class GetRandomUserController extends AbstractController
{
    public function __construct(
        private readonly GenerateRandomUserService $generateRandomUserService,
    ) {
    }

    #[Route(path: '%api_v1_public%/users/random', name: 'generate_random_user')]
    public function getRandomUser(): JsonResponse
    {
        try {
            $response = $this->generateRandomUserService->generate();
        } catch (ValueObjectValidationException) {

        } catch (\Throwable $e) {
            dd(($e));
        }

        return new JsonResponse($response->jsonSerialize());
    }
}
