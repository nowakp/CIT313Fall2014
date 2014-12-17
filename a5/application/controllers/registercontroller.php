<?php

class RegisterController extends Controller{

	protected $userObject;

	public function index(){
		$userObject = new Users();
		$this->set('task','add');
	}

	public function add(){
		$this->userObject = new Users();

//checking passwords match
        $password = $_POST['password'];
		$password2 = $_POST['password2'];
		
		if ($password = $password2)
		{
			$passhash = password_hash($password,PASSWORD_DEFAULT);
		} else{
		echo 'alert("Please make sure your passwords match")';	
		}
		
        $passhash = password_hash($password,PASSWORD_DEFAULT);

		$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$passhash);

		$this->userObject->addUser($data);
		$this->set('message', 'Thanks for registering!');
	}
}
?>
