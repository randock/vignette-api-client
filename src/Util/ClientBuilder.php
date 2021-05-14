<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Util;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Eljam\GuzzleJwt\JwtMiddleware;
use Eljam\GuzzleJwt\Manager\JwtManager;
use Eljam\GuzzleJwt\Strategy\Auth\JsonAuthStrategy;
use Eljam\GuzzleJwt\Persistence\TokenPersistenceInterface;

class ClientBuilder
{
    public static function newClient(string $endpoint, string $jwtEndpoint, array $auth, TokenPersistenceInterface $persistenceStrategy = null): Client
    {
        //Create your auth strategy
        $authStrategy = new JsonAuthStrategy(
            \array_merge(
                $auth,
                [
                    'json_fields' => ['username', 'password'],
                ]
            )
        );

        // Create authClient
        $authClient = new Client(['base_uri' => $endpoint]);

        //Create the JwtManager
        $jwtManager = new JwtManager(
            $authClient,
            $authStrategy,
            $persistenceStrategy,
            [
                'token_url' => \sprintf(
                    '%s/login',
                    $jwtEndpoint
                ),
            ]
        );

        // Create a HandlerStack
        $stack = HandlerStack::create();

        // Add middleware
        $stack->push(
            new JwtMiddleware(
                $jwtManager
            )
        );

        $client = new Client(
            [
                'handler' => $stack,
                'base_uri' => $endpoint,
            ]
        );

        return $client;
    }
}
