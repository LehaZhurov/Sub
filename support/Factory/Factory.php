<?php

namespace Support\Factory;

use Support\Factory\FactoryInterface;
use Faker\Factory as FakeFactory;
use App\Models;

abstract class Factory implements FactoryInterface
{
    abstract public function definition(): array;
    public function __construct(){
        $this->fake();
        $this->definition = $this->definition();
    }
    public function state(array $state)
    {
        $definition = $this->definition();
        $this->definition = $state + $definition;
        return $this;
    }

    public function create()
    {
        $model = new $this->model;
        foreach ($this->definition as $key => $value) {
            $model[$key] = $value;
        }
        $model->save();
        return $model;
    }

    public function fake():void
    {
        $this->fake = FakeFactory::create();
    }

  
}
