<?php
abstract class Model 
{
    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;

    public function __construct() 
	{
        //Will come back to this later
    }

    public function __set($name,$value) 
	{
        $this->$name = $value;
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