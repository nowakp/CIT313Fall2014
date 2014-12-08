<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $rss_title;?></h1>
  </div>
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