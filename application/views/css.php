<?php
if (session_status() == PHP_SESSION_NONE) {
    		session_start();
    		$_SESSION['sid']= session_id();
	}
	if (!isset($_SESSION['user']))
	{
		$_SESSION['user']='';	
	}
	if(!isset($_SESSION['guest_user']))
	{
		$_SESSION['guest_user']='';	
	}
	if(!isset($_SESSION['guest_verify']))
	{
		$_SESSION['guest_verify']= '';	
	}
 $serverroot = "https://thuneegadesigners.com/assets/"; 
?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $serverroot; ?>default-images/favicon.ico">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" >
<style>
    body{
        font-family: 'Whitney', sans-serif;
    }
    header#top .top-header{
        background-image: linear-gradient(90deg, #d25488 20%, #ae6fde 100%);
    }
</style>