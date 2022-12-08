<!DOCTYPE html>
<html>
<body>

<?php
	class fruit{
		public $name;
		public $color;
		function set_name($name){
			$this->name=$name;
		}
		function get_name(){
			return $this->name;
		}
		function set_color($color){
			$this->color=$color;
		}
		function get_color(){
			return $this->color;
		}
	}
	 $obj=new fruit();
	$obj->set_name('apple');
	$obj->set_color('red');
	echo "name is:" . $obj->get_name()."<br/>";
	echo "color is:" . $obj->get_color();
?>
