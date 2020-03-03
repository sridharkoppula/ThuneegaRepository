<?php
include'dbconnect.php';
if(isset($_POST["submit"])) {


// Check if image file is a actual image or fake image
    $pid = mysqli_real_escape_string($con, $_POST['pid']);
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
    $details =$_POST['details'];
    $care = mysqli_real_escape_string($con, $_POST['care']);
    $ship = mysqli_real_escape_string($con, $_POST['ship']);
    $quant = mysqli_real_escape_string($con, $_POST['quant']);
    $img1=  mysqli_real_escape_string($con, $_POST['fileToUpload']);
    $img2=  mysqli_real_escape_string($con, $_POST['fileToUpload2']);
    $img3=  mysqli_real_escape_string($con, $_POST['fileToUpload3']);
    $visible = mysqli_real_escape_string($con, $_POST['visible']);
    
    
    /*$qry=mysqli_query($con, "INSERT INTO products (cat_name,subCategory,color,dealer,productPrice,productPriceBeforeDiscount, discPercent,size,intro, productDescription,productDetails,materialCare,productImage1,productImage2,productImage3,shippingCharge,productAvailability) VALUES('" . $cat . "', '" . $subcat . "','" . $color . "',  '" . $dealer . "','" .$price. "','" . $orgprice . "','" . $percent . "','" . $size. "','" . $intro . "' ,'" . $desc . "','" . $details . "','" . $care . "','" . basename( $_FILES["fileToUpload"]["name"]) . "','" .basename( $_FILES["fileToUpload2"]["name"]) . "','" . basename( $_FILES["fileToUpload3"]["name"]) . "','" . $ship . "','" . $quant. "')"); */
    
    $qry=mysqli_query($con, "UPDATE `products` SET `cat_name`='" .$cat. "',`subCategory`='" .$subcat. "',`tags`='" .$tags. "',`color`='" .$color. "',`dealer`='" .$dealer. "',`productPrice`='" .$price. "',`productPriceBeforeDiscount`='" .$orgprice. "',`discPercent`='" .$percent. "',`size`='" .$size. "',`intro`='" .$intro. "',`productDescription`='" .$desc. "',`productDetails`='" .$details. "',`materialCare`='" .$care. "',`productImage1`='" .$img1. "',`productImage2`='" .$img2. "',`productImage3`='" .$img3. "',`shippingCharge`='" .$ship. "',`productAvailability`='" .$quant. "', `visible`='" .$visible. "' WHERE `id`='" .$pid. "'");
    if($qry){
    echo 'success';
    }else{
    echo 'failed';
    }
    
  /*
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
if ($_FILES["fileToUpload"]["size"] > 7340032) {
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
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
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
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload2"]["size"] > 8000000) {
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
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
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
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload3"]["size"] > 8000000) {
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
    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
    */
    
}
?>