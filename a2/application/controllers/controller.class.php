<?php
class Controller 
{

    public $load;
    public $model;

    function __construct() 
	{
        $this->load = new Load();
        $this->user = new model();
        $this->home();
    }

    function home() {

        $data = $this->user->getName();
        $this->load->view('view.php',$data);
		
		$this->user->userID = 'nowakp';
        $this->user->firstname = 'Piotr';
        $this->user->lastname = 'Nowak';
        $this->user->email = 'nowakp@iupui.edu';
        $this->user->role = 'admin';

    }
}

?>