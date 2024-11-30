<?php
namespace Concept\Singleton;

interface SingletoneInterface
{
    public static function getInstance();
    public function __clone();
}