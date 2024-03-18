<?php

class PayPalPayment implements PaymentStrategy
{
    public function pay($amount)
    {
        // Implementation of PayPal payment logic
        return "Paid $amount via PayPal";
    }
}
