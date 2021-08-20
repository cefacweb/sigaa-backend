<?php

namespace Application\DTO;


use ReflectionClass;
use ReflectionProperty;
use Application\DTO\DTOInterface;

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
