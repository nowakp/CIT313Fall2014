<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include_once("classes/user.class.php");
include_once("classes/reg.class.php");
include_once("classes/admin.class.php");


$reg = new Reg();
$admin = new Admin();

$reg->user_level = 'Regular User';

$admin->user_level = 'Adminstrator';

echo $user_level;
echo $user_id;
echo $user_type;

$Class = new User();
$Class->setFirst('Piotr');

$first_name = $Class->getFirst();

echo $Last_name;

$Class = new User();
$Class->setLast('Nowak');

$last_name = $Class->getlast();

echo $last_name;

$Class = new User();
$Class->setEmail('PiotrNowak@gmail.com');

$email_address = $Class->getEmail();

echo $email_address;

?>
<head>
<title>Exercise 2</title>
</head>

<body>
</body>
</html>