<?php
namespace Core\Collection;

require_once('ICollection.php');
require_once('ACollection.php');

class ACollection
{
   protected $_list;
   
   public function add(array $list)
   {
     $this->_list[] = $list;
     //array_push($this->_list, $list); 
   }
   
   public function populate(array $lists)
   {
      foreach ($lists as $list) {
        $this->_list[] = $list;
      }
   }
   
   public function get($index)
   {
      return (isset($this->_list[$index])) ? $this->_list[$index] : false;
   }
   
   public function size() {
      return count($this->_list);
   }
   
   public function getAll() {
     return $this->_list;
   }
}