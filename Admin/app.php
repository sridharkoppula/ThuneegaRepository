<?php
	require "main.php";
	
	$helper = $fb->getRedirectLoginHelper();
	try {
	  	$accessToken = $helper->getAccessToken();
	  	//$accessToken="161959124414764|GGn5IcN7Zz-8ROPQDienx5OH9Wk";
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  	echo $e->getMessage();
	  	exit;
	}
	 
	if (isset($accessToken)) {
	
		$cilent = $fb->getOAuth2Client();
		try {
		  $accessToken = $cilent->getLongLivedAccessToken($accessToken);
		  //$accessToken="161959124414764|GGn5IcN7Zz-8ROPQDienx5OH9Wk";
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  echo $e->getMessage();
		  exit;
		}
		$_SESSION['token'] = (string) $accessToken;
	  	header('Location: dataip.php');
	  	
	} elseif ($helper->getError()) {
	 	echo "Sorry, You cannot use the app without these permissions. Go back to <a href = 'index.php'>home</a>.";
	  	exit;
	} 
	
		
?>