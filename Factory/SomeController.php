<?php

class SomeController extends Controller
{
    public function index()
    {
        $product1 = ProductFactory::create('Laptop', 999.99);
        $product2 = ProductFactory::createRandom();
    }
}