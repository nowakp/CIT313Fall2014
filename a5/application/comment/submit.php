<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

include("application/connect.php");
include ("application/comment/comment.class.php");

/*
/	This array is going to be populated with either
/	the data that was sent to the script, or the
/	error messages.
/*/

$arr = array();
$validates = Comment::validate($arr);

if($validates)
{
	/* Everything is OK, insert to database: */
	
	mysql_query("	INSERT INTO comments(commentID,uID,commentText)
					VALUES (
						'".$arr['commentID']."',
						'".$arr['uID']."'
						'".$arr['commentText']."'
					)");
	
	$arr['date'] = date('r',time());
	$arr['commentID'] = mysql_insert_id();
	
	/*
	/	The data in $arr is escaped for the mysql query,
	/	but we need the unescaped variables, so we apply,
	/	stripslashes to all the elements in the array:
	/*/
	
	$arr = array_map('stripslashes',$arr);
	
	$insertedComment = new Comment($arr);

	/* Outputting the markup of the just-inserted comment: */

	echo json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

}
else
{
	/* Outputtng the error messages */
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}

?>