<?php
namespace Core\Collection;

require_once('ICollection.php');
require_once('ACollection.php');

class Collection extends \Core\Collection\ACollection implements \Core\Collection\ICollection
{
   public function _construct()
   {
     $this->_init();
   }
   
   protected function _init() {
      $this->_list = array();
   }
   
   public function findMaximum()
   {
     for ($n = $this->size()-1; $n > 1; $n--) 
     {
       $nextRow = $n - 1;  //go back one index
	   foreach ($this->_list[$n] as $index => $val) //loop thru array element
	   {
		  $nextIndex = $index + 1;
		  $sum = 0;
				
		  if( isset($this->_list[$n][$index]) && isset($this->_list[$n][$nextIndex]) )
		  {
			  if( $this->_list[$n][$index] > $this->_list[$n][$nextIndex] ){
				  $sum = (int)$val;
			  }
			  elseif( $this->_list[$n][$index] < $this->_list[$n][$nextIndex] ){
				  $sum = (int)$this->_list[$n][$nextIndex];
			  }
			  elseif( $this->_list[$n][$index] == $this->_list[$n][$nextIndex] ){
				  $sum = (int)$this->_list[$n][$nextIndex];
			  }
			
			  $this->_list[$nextRow][$index] += $sum;
		  }
       }
     }
     
     $row = $this->_list[1];
	 sort($row);
	 return $row[count($row)-1] + (int)$this->_list[0][0];		
		
   } //end method
}