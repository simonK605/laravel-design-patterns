<?php

class CreditCardPayment implements PaymentStrategy
{
    public function pay($amount)
    {
        // Implementation of credit card payment logic
        return "Paid $amount via Credit Card";
    }
}
