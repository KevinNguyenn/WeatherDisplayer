<?php

	$city = $_GET["city"];
	$city = str_replace(" ", "", $city);
	$endpoint = "api.openweathermap.org/data/2.5/weather?q=".$city."&APPID=42af758e0950107323569b8f9b423cf0";

	$session = curl_init($endpoint);

	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

	$data = curl_exec($session);

	curl_close($session);

	$contents = json_decode($data, true);

	echo $contents['weather'][0]['description'];
?>