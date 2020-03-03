<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('Textlocal.php');
class Setupfile {
  function send($number, $message, $type)
  {
    $Textlocal = new Textlocal(false, false, 'nfFPam5ZTbY-7C084JTS6Stow97kGvA2fSPx7WhZxP');
    if($type == "single"){
        $numbers = array($number);
    }
    else if($type == "admin"){
     $numbers = array(9848131928,9603894872);   
    }
    else{
        $numbers = array(8639981512); 
    }
	$sender = 'TXTLCL';
    $response = $Textlocal->sendSms($numbers, $message, $sender);
  return $response;
  }
}