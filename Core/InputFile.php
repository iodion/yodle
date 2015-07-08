<?php
namespace Core;

require_once('AInput.php');
require_once('IInput.php');

class InputFile extends \Core\AInput implements \Core\IInput
{
   private $_source;
   
   public function setSource($source) {
      $this->_source = $source;
   }
   
   public function getData()
   {
      return file($this->_source);
   }
}