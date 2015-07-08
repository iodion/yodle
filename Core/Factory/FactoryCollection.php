<?php
namespace Core\Factory;

//require_once('../IFactory.php');
//require_once('../Collection/Collection.php');

class FactoryCollection implements \Core\IFactory
{
    public static function getInstance()
    {
       return new \Core\Collection\Collection();
    }
}