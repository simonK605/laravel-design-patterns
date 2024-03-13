<?php

class SomeObserver implements Observer
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update($data)
    {
        echo "Observer {$this->name} received an update: $data\n";
    }
}
