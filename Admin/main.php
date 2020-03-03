<?php
	session_start();
	require "fbsdk/src/Facebook/autoload.php";
	require "fbsdk/src/Facebook/Facebook.php";
	$fb = new Facebook\Facebook([
	  'app_id'                => '161959124414764',
	  'app_secret'            => 'ddf33c7cb84fe36a660fa6f07f0bc607',
	  'default_graph_version' => 'v2.11',
	]);
?>