<?php
namespace Core\Collection;

interface ICollection
{
   public function add(array $list);
   public function get($index);
   public function populate(array $lists);
   public function size();
   public function getAll();
}