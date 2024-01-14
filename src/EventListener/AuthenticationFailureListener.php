<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationFailureListener
{
    /**
     * @param AuthenticationFailureEvent $event
     */
    public function onAuthenticationFailureResponse(AuthenticationFailureEvent $event): void
    {
        $data = [
            'data' => [],
            'errors' => [
                'email' => ['Bad credentials, please verify that your email are correctly set'],
                'password' => ['Bad credentials, please verify that your password are correctly set']
            ]
        ];

        $response = new JsonResponse($data, Response::HTTP_UNAUTHORIZED, ['WWW-Authenticate' => 'Bearer']);

        $event->setResponse($response);
    }
}