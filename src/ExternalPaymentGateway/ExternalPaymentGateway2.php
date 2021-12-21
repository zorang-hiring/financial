<?php
declare(strict_types=1);

namespace Financial\ExternalPaymentGateway;

use Exception;

interface ExternalPaymentGateway2
{
    /**
     * @return int On successful payment returns 200 and unsuccessful returns 500
     * @throws Exception
     */
    public function charge(int $cvv, int $cardNumber): int;
}