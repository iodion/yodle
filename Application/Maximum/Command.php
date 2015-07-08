<?php
namespace Application\Maximum;

require_once('../../Core/ACommand.php');
require_once('../../Core/ICommand.php');

require_once('../../Core/IFactory.php');
require_once('../../Core/InputFile.php');
require_once('../../Core/Collection/Collection.php');

require_once('../../Core/Factory/FactoryCollection.php');
require_once('../../Core/Factory/FactoryInputFile.php');

class Command extends \Core\ACommand implements \Core\ICommand
{
  public function _preRun()
  {
    $this->_input = \Core\Factory\FactoryInputFile::getInstance();
    $this->_input->setSource(dirname(dirname(__DIR__)) . '/' . 'resources' . '/' . 'input.txt');
     
    $this->_collection = \Core\Factory\FactoryCollection::getInstance();
    $data = $this->_input->getData();
    foreach ($data as $val) {
      $numList = explode( ' ' , $val );
      if (trim( $numList[count($numList)-1] ) == "") {
		  array_pop( $numList );
	  } 
	  $this->_collection->add($numList);
    } 
  }
  
  public function _run()
  {
    $max = $this->_collection->findMaximum();
    echo $max;
  }
  
  public function _postRun(){}
}

$command = new \Application\Maximum\Command();
$command->execute();