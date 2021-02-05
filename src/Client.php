<?php

namespace Paylith;

class Client extends Api
{
    private $apiKey = '';
    private $apiSecret = '';

    public function __construct($apiKey, $apiSecret)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

    private function generateToken($conversationId, $userId, $userEmail, $userIpAddress)
    {
        $hashStr = [
            'apiKey' => $this->apiKey,
            'conversationId' => $conversationId,
            'userId' => $userId,
            'userEmail' => $userEmail,
            'userIpAddress' => $userIpAddress,
        ];

        ksort($hashStr);

        $hash = hash_hmac('sha256', implode('|', $hashStr) . $this->apiSecret, $this->apiKey);
        return hash_hmac('md5', $hash, $this->apiKey);
    }

    public function createMerchantLink($conversationId, $userId, $userEmail, $userIpAddress)
    {
        return $this->request('POST', 'token', [
            'form_params' => [
                'token' => $this->generateToken($conversationId, $userId, $userEmail, $userIpAddress),
                'apiKey' => $this->apiKey,
                'conversationId' => $conversationId,
                'userId' => $userId,
                'userEmail' => $userEmail,
                'userIpAddress' => $userIpAddress,
            ]
        ]);
    }
}
