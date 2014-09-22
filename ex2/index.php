<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include_once("file:///C|/Users/piotr_000/Desktop/IUPUI/CIT313Fall2014/ex2/classes/user.php");

$Class = new User();
$Class->setFirst('Peter');

$first_name = $Class->getFirst();

echo $first_name;

?>
<head>
<title>Exercise 2</title>
</head>

<body>
</body>
</html>