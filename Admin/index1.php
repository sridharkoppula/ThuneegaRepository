<?php	
	require "main.php";
	
	 
	if (isset($_SESSION['token'])) {
	  try {
          
          $res = $fb->get('/me/accounts', $_SESSION['token']);
          $res = $res->getDecodedBody();
          
          foreach($res['data'] as $page){
              echo $page['id'] . " - " . $page['name'] . "<br>";
              
          }
          
          ?>
        
        <form method = "post" action = "page.php" >
            <input type = "text" name = "pageid" placeholder = "Page ID">
            <input type = "text" name = "product" placeholder="Product" required>
            <input type = "text" name = "price" placeholder="Price" required>
            <input type = "text" name = "desc" placeholder="Description" required>
            <input type = "submit">
        </form>

        <?php
          
	  } catch( Facebook\Exceptions\FacebookSDKException $e ) {
	    echo $e->getMessage();
	    exit;
	  }
	}
	else{
		$helper = $fb->getRedirectLoginHelper();
		$permissions = ['email', 'user_posts', 'manage_pages', 'publish_actions', 'publish_pages'];
		$callback    = 'https://www.thuneegadesigners.com/Facebook/app.php';
		$loginUrl    = $helper->getLoginUrl($callback, $permissions);
		echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
	}
	
?>