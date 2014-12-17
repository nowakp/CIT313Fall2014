<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $rss_title;?></h1>
  </div>

<?php 
echo "Check out my blog for more news!"."</br>"; 
$image_url='http://i.cnn.net/cnn/images/1999/07/cnn.com.logo.gif';
?>

<img src="<?php echo $image_url;?>">
   
    <div class="alert alert-success">
        <?php echo $message;?>
    </div>
    
    <?php
	
	$rss = simplexml_load_file("http://rss.cnn.com/rss/cnn_topstories.rss");
	
	echo "<h1>".$rss->channel->title."</h1>";
	
	foreach($rss->channel->item as $item){
		echo $item->title."<br/".$item->link."<hr/>";	
	}
	
	?>
</div>
<?php include('views/elements/footer.php');?>