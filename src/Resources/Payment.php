<?php

namespace Paylith\Resources;

use Paylith\Api;

class Payment extends Api
{
    public function getDetail($ipAddress, $paymentId)
    {
        return $this->request('POST', '/payment/detail', [
            'form_params' => [
                'ipAddress' => $ipAddress,
                'paymentId' => $paymentId,
            ]
        ]);
    }
}
