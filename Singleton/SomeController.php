<?php

class SomeController extends Controller
{
    public function index()
    {
        $logger = app('Logger');
        $logger->log('This message will be logged.');

        // You can also use the facade if you prefer
        \Logger::log('Another message logged.');
    }
}