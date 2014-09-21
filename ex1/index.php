<html>

<body>
<?php

include('includes/header.inc.php');

function my_function(){
//I know this is probably not the correct way to use this but i could not figure out how to
//  call my array outside of the function

$myArray = array('myName' =>'Piotr Nowak', 'myColor' => 'Red', 'myMovie' => 'Twelve Monkeys', 'myBook' => 'Do Not Read',
    'myWebsite' => 'eBay');

$myName = $myArray['myName'];

echo "<h1>" . "$myName" . "</h1>";

$myCount = 0;
"<ul>";

foreach($myArray as $key)
  {

        if ($myCount <"1"){

            ++$myCount;

        }else{
            echo"<li>", $key,"</li>","</br>";
        }

    }
}

my_function();

include('includes/footer.inc.php');

?>
</body>
</html>