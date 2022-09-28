<?php

namespace Support\Factory;

interface FactoryInterface
{

    public function state(array $definition);

    public function create();

    public function fake();

}
