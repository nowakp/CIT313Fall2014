<?php

class HomeController extends Controller{

	public function index(){

		$feed = "http://rss.cnn.com/rss/cnn_topstories.rss";
		$rss = new RssDisplay($feed);
		
		$feed_data = $rss->getFeedItems();
		
		$channel_title = $feed_data->channel->title;
		
		$this->set('rss_title',$channel_title);
	}

}

?>