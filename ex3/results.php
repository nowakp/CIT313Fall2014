<html>

<body>

<?php

function myLoad($class)
{
	include_once('classes/'.strtolower($class).'.class.php');
	
}
spl_autoload_register('myLoad');


function RegisteredUser($newuser, $regular)

{
	// I posted these and for some reason it was not working, I even called the function afterwards 
	// to see if that would work but it did not
	
	//$firstname = $_POST['firstname'];
	//$lastname = $_POST['lastname'];
	//$email = $_POST['email'];

}
RegisteredUser();

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	 if (!is_object(RegisteredUser)) {
        echo "$firstname <p/>$lastname <p/> $email";
    }
	else
	{
		echo 'Not an Object';
	}
?>

</body>
</html>