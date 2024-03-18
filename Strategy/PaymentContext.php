<?php

class PaymentContext
{
    private $paymentStrategy;

    public function __construct(PaymentStrategy $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function processPayment($amount)
    {
        return $this->paymentStrategy->pay($amount);
    }
}
