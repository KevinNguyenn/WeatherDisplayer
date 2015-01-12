<?php
	//file_get_contents(http://www.weather-forecast.com/locations/Austin/forecasts/latest)
	preg_match("/3 Day Weather Forecast Summary:/i", $contents, $matches)
?>