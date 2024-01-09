<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
class AuthenticationSuccessListener
{
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event): void
    {
        $user = $event->getUser();
        $event->setData([
            'data' => [
                'user' => [
                    'id' => $user->getUserIdentifier(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'roles' => $user->getRoles()
                ],
                'token' => $event->getData()['token'],
            ]
        ]);
    }
}