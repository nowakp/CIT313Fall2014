<?php
class Admin extends user
{

public function __construct()
{
	parent::__construct();
}

public function __set($name,$value)
{
	$this->$name = $value;
	return;
}

public function __get($name)
{
	return $this->$name;
}

public function __destruct()

{
}

}
?>