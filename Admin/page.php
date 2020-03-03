<?php
    
    require "main.php";

  if(isset($_SESSION['token'])){
        
        $id = "246100572565194";
        $product = $_POST['product'];
        $price = "Price:".$_POST['price'];
        $desc = $_POST['desc'];
        $wa="WhatsApp: 9133334045";
        $web = "www.thuneegadesigners.com";
        $message = $product."\n".$price."\n".$desc."\n".$wa."\n".$web;
        $photo="https://www.thuneegadesigners.com/Facebook/logo.png";
        $data = array(
            message => $message,
            source => $fb->fileToUpload($photo)    
        );
        
        $res = $fb->get('/me/accounts', $_SESSION['token']);
        $res = $res->getDecodedBody();
        
        foreach($res['data'] as $page){
            if($page['id'] == $id){
                $accesstoken = $page['access_token'];
            }
        }
        //$res = $fb->post('/me/photos', $data, $_SESSION['token']);
     	$res = $fb->post($id . '/photos/', $data, $accesstoken);
        header('Location: index1.php');
        
    }



?>