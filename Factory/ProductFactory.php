<?php

class ProductFactory
{
    public static function create($name, $price)
    {
        return new Product($name, $price);
    }

    public static function createRandom()
    {
        $faker = \Faker\Factory::create();

        return new Product($faker->word, $faker->randomFloat(2, 1, 100));
    }
}
