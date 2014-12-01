<?php
class RegisterController extends Controller
{
	protected $userObject;
	public function defaultTask()
	{
		$userObject = new Users();
		$this->set('task','add');
	}

	public function add(){

		$password = $_POST['password'];
		
		$passhash = password_hash($password,PASSWORD_DEFAULT);
		
		$this->userObject = new Users();
		
		$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$_POST['password']);
		$this->userObject->addUser($data);
		$this->set('message', 'Thanks for Registering!');
	}
}
?>