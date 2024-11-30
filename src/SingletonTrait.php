<?php
namespace Concept\Singleton;

trait SingletonTrait
{
    private static $instance = null;
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }
    
    private function __construct()
    {
        
    }
    
    private function __clone()
    {
        
    }
}