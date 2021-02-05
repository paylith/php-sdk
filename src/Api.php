<?php

namespace Paylith;

class Api
{
    public function request(string $method, string $uri, array $options = []){
        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://api.paylith.com/v1/'
        ]);

        return json_decode(
            (string) $client->request($method, $uri, $options)->getBody()
        );
    }
}
