<?php
	function C($name, $method){
		require_once('./libs/Controller/'.$name.'Controller.php');
		eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');
	}

	function M($name){
		require_once('./libs/Model/'.$name.'Model.php');
		eval('$obj = new '.$name.'Model();');
		return $obj;
	}

?>