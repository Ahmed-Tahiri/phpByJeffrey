<?php

namespace Core;

class App
{
    static protected $container;
    static public function setContainer($container)
    {
        static::$container = $container;
    }
    static public function container($container)
    {
        return static::$container;
    }
    static public function bind($key, $resolver)
    {
        return static::$container->bind($key, $resolver);
    }
    static public function resolve($key)
    {
        return static::$container->resolve($key);
    }
}
