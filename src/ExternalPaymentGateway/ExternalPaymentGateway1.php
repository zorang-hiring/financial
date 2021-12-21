<?php
declare(strict_types=1);

namespace Financial\ExternalPaymentGateway;

use Exception;

interface ExternalPaymentGateway1
{
    /**
     * @return bool On successful payment returns TRUE and unsuccessful returns FALSE
     * @throws Exception
     */
    public function pay(int $cardNumber, int $cvv): bool;
}