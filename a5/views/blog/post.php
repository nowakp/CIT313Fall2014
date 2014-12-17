<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);
}?>
    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
    </div>

<?php

error_reporting(E_ALL^E_NOTICE);

include("application/connect.php");
include ("application/comment/comment.class.php");

$comments = array();
$result = mysql_query("SELECT * FROM comments ORDER BY id ASC");

while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}

?>

<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>
<?php

foreach($comments as $c){
	echo $c->markup();
}
?>

<div id="addCommentContainer">
	<p>Add a Comment</p>
	<form id="addCommentForm" method="post" action="">
    	<div>
        	<label for="name">Your Name</label>
        	<input type="text" name="name" id="uID" />
            
            <label for="body">Comment Body</label>
            <textarea name="body" id="commentBody" cols="20" rows="5"></textarea>
            
            <input type="submit" id="submit" value="Submit" />
        </div>
    </form>
</div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="application/comment/script.js"></script>

</body>
</html>

<?php include('views/elements/footer.php');?>