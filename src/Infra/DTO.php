<?php

namespace Infra;


use ReflectionClass;
use Infra\DTOInterface;
use ReflectionProperty;

abstract class DTO implements DTOInterface
{
    public function __construct(array $parameters = [])
    {
        $class = new ReflectionClass(static::class);

        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $reflectionProperty){
            $property = $reflectionProperty->getName();
            $this->{$property} = $parameters[$property];
        }
    }
}
