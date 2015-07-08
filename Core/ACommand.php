<?php
namespace Core;

abstract class ACommand
{
  protected abstract function _preRun();
  protected abstract function _run();
  protected abstract function _postRun();
  
  public function execute()
  {
    $this->_preRun();
    $this->_run();
    $this->_postRun();
  }
}