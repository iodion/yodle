<?php
namespace Core\Factory;

//require_once('../IFactory.php');
//require_once('../InputFile.php');

class FactoryInputFile implements \Core\IFactory
{
    public static function getInstance()
    {
       return new \Core\InputFile();
    }
}