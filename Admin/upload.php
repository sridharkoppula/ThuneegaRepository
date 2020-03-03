<?php
include'dbconnect.php';
if(isset($_POST["submit"])) {
$target_dir = $_SERVER['DOCUMENT_ROOT']."/gallery/product-images/sarees/";
$target_dir2 = $_SERVER['DOCUMENT_ROOT']."/gallery/product-images/thumbnails/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$target_file4 = $target_dir2 . basename($_FILES["fileToUpload"]["name"]);
$fbimage="https://www.thuneegadesigners.com/gallery/product-images/sarees/".basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $cat = mysqli_real_escape_string($con, $_POST['cat']);
    $subcat = mysqli_real_escape_string($con, $_POST['subcat']);
    $color = mysqli_real_escape_string($con, $_POST['color']);
    $tags = mysqli_real_escape_string($con, $_POST['tags']);
    $dealer = mysqli_real_escape_string($con, $_POST['dealer']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $orgprice = mysqli_real_escape_string($con, $_POST['orgprice']);
    $percent = mysqli_real_escape_string($con, $_POST['percent']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $intro = mysqli_real_escape_string($con, $_POST['intro']);
    $desc = mysqli_real_escape_string($con, $_POST['desc']);
    $fabric = mysqli_real_escape_string($con, $_POST['fabric']);
    $det_color = mysqli_real_escape_string($con, $_POST['det-color']);
    $occ_type = mysqli_real_escape_string($con, $_POST['occ-type']);
    $care = mysqli_real_escape_string($con, $_POST['care']);
    $ship = mysqli_real_escape_string($con, $_POST['ship']);
    $quant = mysqli_real_escape_string($con, $_POST['quant']);
    $visible = mysqli_real_escape_string($con, $_POST['visible']);
    $fbs = mysqli_real_escape_string($con, $_POST['fb']);
    $details= '<b>Product Name:</b>'.$fabric.'<br>'.'<b>Color:</b>'.$det_color.'<br>'.'<b>Occasion Type:</b>'.$occ_type.'<br>';
   
    $qry=mysqli_query($con, "INSERT INTO products (cat_name,subCategory,tags,color,dealer,productPrice,productPriceBeforeDiscount, discPercent,size,intro, productDescription,productDetails,materialCare,productImage1,productImage2,productImage3,shippingCharge,productAvailability,visible) VALUES('" . $cat . "', '" . $subcat . "','" .$tags. "','" . $color . "',  '" . $dealer . "','" .$price. "','" . $orgprice . "','" . $percent . "','" . $size. "','" . $intro . "' ,'" . $desc . "','" . $details . "','" . $care . "','" . basename( $_FILES["fileToUpload"]["name"]) . "','" .basename( $_FILES["fileToUpload2"]["name"]) . "','" . basename( $_FILES["fileToUpload3"]["name"]) . "','" . $ship . "','" . $quant. "','" . $visible. "')");
    if($qry){
    echo 'success';
    }else{
    echo 'failed';
    }


    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    } 
    
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 12582912) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
        //thumbnail
        if (copy($target_file, $target_file4)) {
        echo "The file Thumbnail has been uploaded.<br>";
        }
        
        
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
    
    
     $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    
    
    
    
}
// Check if file already exists
if (file_exists($target_file2)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload2"]["size"] > 12582912) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
    
    
    
     $check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    
}
// Check if file already exists
if (file_exists($target_file3)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload3"]["size"] > 12582912) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
    
}


//Facebook API
//echo "<br>Facebook start";
require "main.php";
if($fbs == 'yes'){
  echo "<br>Facebook yes";
  if(isset($_SESSION['token'])){
  	echo "<br>Token access";
        $id = "246100572565194";
        $product = $intro;
        $price = "Price:".$price;
        $desc = $desc;
        $wa="WhatsApp: 9133334045";
        $web = "www.thuneegadesigners.com";
        $message = $product."\n".$desc."\n".$wa."\n".$web;
        $photo=$fbimage;
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
        //header('Location: index.php');
        echo "<br>Facebook Success";
        
    }
   }


?>