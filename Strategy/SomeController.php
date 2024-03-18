<?php

class SomeController extends Controller
{
    public function index()
    {
        // Create payment strategies
        $creditCardPayment = new CreditCardPayment();
        $paypalPayment = new PayPalPayment();

        // Use different payment strategies dynamically
        $paymentContext = new PaymentContext($creditCardPayment);
        $result1 = $paymentContext->processPayment(100);

        $paymentContext = new PaymentContext($paypalPayment);
        $result2 = $paymentContext->processPayment(50);

        // Output:
        // Paid 100 via Credit Card
        // Paid 50 via PayPal
    }
}