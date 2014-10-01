<?php
ini_set('display_errors',1);
error_reporting(E_ALL);	

function myLoad($class)
{
	include_once('classes/'.strtolower($class).'.class.php');
	
}

spl_autoload_register('myLoad');



$register = new RegisteredUser('nowakp','Regular User');
$admin = new Admin('jmax','Administrator');

$register->first_name = 'Piotr';
$register->last_name = 'Nowak';
$register->email_address = 'nowakp@iupui.edu';

$admin->first_name = 'Josh';
$admin->last_name = 'Max';
$admin->email_address = 'JoshM@gmail.com';

?>

<!DOCTYPE html>
<html>
<head>
<title>CIT313 - Fall 2014 - Exercise 2 - Nowakp</title>
</head>
<body>

<?php
echo "User Level: ". $register->user_level . "<br/>";
echo "Registered User ID: ". $register->user_id ."<br/>";
echo "Registered User Type: ". $register->user_type ."<br/>";
echo "Registered First Name: ". $register->first_name ."<br/>";
echo "Registered Last Name: ". $register->last_name ."<br/>";
echo "Registered Email: ". $register->email_address ."<br/><hr/>";

echo "User Level: ". $admin->user_level . "<br/>";
echo "Admin User ID: ". $admin->user_id ."<br/>";
echo "Admin User Type: ". $admin->user_type ."<br/>";
echo "Admin First Name: ". $admin->first_name ."<br/>";
echo "Admin Last Name: ". $admin->last_name ."<br/>";
echo "Admin Email: ". $admin->email_address ."<br/><hr/>";


$TestEq = admin::Equation(2,3);
echo "$TestEq is my math <hr/>";

?>	
</body>
</html>