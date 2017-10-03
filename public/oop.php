<?php
	// class Foo
 //   	{
 //      	public static $my_static = 'foo';
      
 //      	public function staticValue() {
 //        	return self::$my_static;
 //      	}
 //   	}
	
 //   	print Foo::$my_static . "\n";
 //   	$foo = new Foo();
   
 //   	print $foo->staticValue() . "\n";
	class Student {
		private $name = "Jack";
		public function setName($newName){
			$this->name = $newName;
		}
		public function getName() {
			return $this->name . "<br />";
		}
	} 
	$obj = new Student();
	$obj->setName('Peter');
	echo $obj->getName();