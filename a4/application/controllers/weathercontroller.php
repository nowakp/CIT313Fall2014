<?php

class WeatherController extends Controller{
	public function indexgetresults()
	{
		$this->set(result,false);
	}
	
	public function getresults()
	{
		
		$xml = simplexml_load_file("http://api.worldweatheronline.com/free/v2/weather.ashx?q=".$_POST['zip']."&format=xml&num_of_days=2&key=75789efad8492b52b4bd7bae38305");
		$this->set(result,true);
		$this->set(weather,$xml);
	}

}

?>