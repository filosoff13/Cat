<?php
require_once 'animal_class.php';
/**
 * class Cat
 */
class Cat extends Animal
{
	
	//нет необходимости определять конструктор
	function meow($catname)
	{
		$a = $this->catname = $catname;
		return "Cat $a is saying meow";
	}
}
?>