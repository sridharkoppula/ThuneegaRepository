<?php
//session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (session_status() == PHP_SESSION_NONE) {
    		session_start();
    		$_SESSION['sid']= session_id();
    	}
        // load URL helper
        $this->load->helper('url');
    }

    public function index() {
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Products');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        //print_r($data['subcat']);
        $this->load->model('Cart_model');
        $data['cart_count'] = $this->Cart_model->cartCount();

        $this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('login');
        //$this->load->view('welcome_message');
        $this->load->view('footer', TRUE);
    }

    public function newUSer() {
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Products');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        //print_r($data['subcat']);
        $this->load->model('Cart_model');
        $data['cart_count'] = $this->Cart_model->cartCount();


        $this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('signup');
        $this->load->view('footer', TRUE);
    }

    public function addUser() {
        //$data=array();
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d H:i:s");
        $pin = mt_rand(1000, 9999);
        $email = \filter_input(INPUT_POST, 'email1');
        $fname = \filter_input(INPUT_POST, 'fname');
        $lname = \filter_input(INPUT_POST, 'lname');
        $password = \filter_input(INPUT_POST, 'password');
        $mobile = \filter_input(INPUT_POST, 'mobile');
        $city = \filter_input(INPUT_POST, 'city');
        $address = \filter_input(INPUT_POST, 'address');
        $pincode = \filter_input(INPUT_POST, 'pincode');
        $this->load->model('Authentication');
        $status = $this->Authentication->addUser($email, $fname, $lname, $password, $pin, $mobile, $city, $address, $pincode, $date);
        if($status=='success'){
        // Sending SMS notification
            $apiKey = urlencode('nfFPam5ZTbY-7C084JTS6Stow97kGvA2fSPx7WhZxP');
            $numbers = array(9603894872,$mobile);
            $sender = urlencode('TXTLCL');
            $message = rawurlencode('Thank you for registering on Thuneega Designers. Exploring new fashion');
            $numbers = implode(',', $numbers);
            $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
	    // Send the POST request with cURL
	    $ch = curl_init('https://api.textlocal.in/send/');
	    curl_setopt($ch, CURLOPT_POST, true);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $response = curl_exec($ch);
	    curl_close($ch);
	    
	    // Sending Email notification
	    
	    $body ='<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      @media only screen and (max-device-width: 480px) {        
      }
    </style>
  </head>
  <body>
      <a href="https://www.thuneegadesigners.com" style="text-decoration: none;">
      <p><img src="https://thuneegadesigners.com/logo.png" alt="Thuneega Designers" /></p></a>
      <p><span style="background-color: #ffffff; color: #008080;">Dear Sir / Madam,</span></p>
      <p><span style="background-color: #ffffff; color: #003366;">Thank You for Registering on <strong>Thuneega Designers!</strong></p>';
	
	$body.='
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;">Thanks &amp; Regards!</span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;"><a href="https://www.thuneegadesigners.com" style="text-decoration: none;"><span style="color: #ff6600;"><span style="color: #333333;">From</span> <strong>Thuneega Designers</strong></span>.</a></span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;"></span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;">       </span></p>
      <p><span style="background-color: #ffffff; color: #008080;"></span></p>
      <p><span style="background-color: #00ccff;"></span></p>
      <p></p>
  </body>
</html>';
	    $config['mailtype'] = 'html';
	    $this->email->initialize($config);            
            $from_email='support@thuneegadesigners.com';
            $this->email->from($from_email, 'Thuneega Designers');
            $this->email->to($email);
            $this->email->subject('Registered successfully @ Thuneega Designers');
            $this->email->message($body);
            $this->email->send();
        }
        echo $status;
        return $status;
    }

    public function checkEmail() {
        $email = \filter_input(INPUT_POST, 'email1');
        $this->load->model('Authentication');
        $status = $this->Authentication->checkEmail($email);
        echo $status;
        return $status;
    }

    public function checkLogin() {
        $email = \filter_input(INPUT_POST, 'email1');
        $pass = \filter_input(INPUT_POST, 'password1');
        $this->load->model('Authentication');
        $status = $this->Authentication->checkCredentials($email, $pass);
        if($status == "success"){
           $_SESSION[ 'user']=$email;
           $_SESSION['guest_user'] = '';
           //$this->nativesession->set('user',$email);
           //$this->nativesession->set('guest_user','');
        }
        echo $status;
        return $status;
    }

    public function logout() {
	if (session_status() == PHP_SESSION_NONE) {
    		session_start();
	}	
        if (session_destroy()) {
            header("Location: index.php");
        }
    }

    public function newGuest() {
    	if($_SESSION['guest_verify'] =="yes" && !empty($_SESSION['guest_user']))
	{
        // var_dump($_SESSION['guest_verify']);
         redirect('/secure_pay', 'refresh');
	}
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Products');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        //print_r($data['subcat']);
        $this->load->model('Cart_model');
        $data['cart_count'] = $this->Cart_model->cartCount();

        $this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('guest_details');
        $this->load->view('footer', TRUE);
    }

    public function checkGuest() {
        $email = \filter_input(INPUT_POST, 'guest');
        $this->load->model('Authentication');
        $status = $this->Authentication->checkGuest($email);
        if($status == "new"){
            $_SESSION['guest_user']='';
            $_SESSION['user'] = '';
        }else{
            // $_SESSION[ 'guest_user']=$email;
            $_SESSION['user'] = '';
            //$this->nativesession->set('guest_user',$email);
            //$this->nativesession->set('user','');
        }
        echo $status;
        return $status;
    }

    public function addGuest() {
        //$data=array();
        //echo 'AddGuest';
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d H:i:s");
        $pin = mt_rand(1000, 9999);
        $email = \filter_input(INPUT_POST, 'email1');
        $fname = \filter_input(INPUT_POST, 'fname');
        $lname = \filter_input(INPUT_POST, 'lname');
        $mobile = \filter_input(INPUT_POST, 'mobile');
        $city = \filter_input(INPUT_POST, 'city');
        $address = \filter_input(INPUT_POST, 'address');
        $pincode = \filter_input(INPUT_POST, 'pincode');
        $map_loc = \filter_input(INPUT_POST, 'map_loc');
        $this->load->model('Authentication');
        $status = $this->Authentication->addGuest($email, $fname, $lname, $pin, $mobile, $city, $address, $pincode, $date, $map_loc);
        if($status == "success"){
            $_SESSION['guest_user']=$email;	
            $_SESSION['user'] = '';
            //$this->nativesession->set('guest_user',$email);
            //$this->nativesession->set('user','');
        }
        echo $status;
        return $status;
    }

    public function getLocation() {        
            //send request and receive json data by latitude and longitude
            $latitude=  \filter_input(INPUT_POST, 'latitude');
            $longitude=  \filter_input(INPUT_POST, 'longitude');            
            $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($latitude) . ',' . trim($longitude) . '&sensor=false';
            $json = @file_get_contents($url);
            //echo $json->status;
            $data = json_decode($json);
            $status = $data->status;
            //echo $status;
            //if request status is successful
            if ($status == "OK") {
                //get address from json data
                $location = $data->results[0]->formatted_address;
            } else {
                $location = '';
            }

            //return address to ajax 
            echo $location;
        
    }
    
    public function updateGuest() {
        //$data=array();
        //echo 'AddGuest';
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d H:i:s");
        $pin = mt_rand(1000, 9999);
        $email = \filter_input(INPUT_POST, 'email1');
        $fname = \filter_input(INPUT_POST, 'fname');
        $lname = \filter_input(INPUT_POST, 'lname');
        $mobile = \filter_input(INPUT_POST, 'mobile');
        $city = \filter_input(INPUT_POST, 'city');
        $address = \filter_input(INPUT_POST, 'address');
        $pincode = \filter_input(INPUT_POST, 'pincode');
        $map_loc = \filter_input(INPUT_POST, 'map_loc');
        $this->load->model('Authentication');
        $status = $this->Authentication->updateGuest($email, $fname, $lname, $pin, $mobile, $city, $address, $pincode, $date, $map_loc);
        $_SESSION['guest_user']=$email;
        $_SESSION['user'] = '';
        //$this->nativesession->set('guest_user',$email);
        //$this->nativesession->set('user','');
        echo $status;
        return $status;
    }
    
    public function changePassword(){
        $cpass = \filter_input(INPUT_POST, 'cpass');
        $npass = \filter_input(INPUT_POST, 'npass');
        $cnpass = \filter_input(INPUT_POST, 'cnpass');
        $this->load->model('Authentication');
        $status = $this->Authentication->changePassword($cpass, $npass, $cnpass);
        echo $status;
        return $status;
        
    }
    
    public function changeAddress(){
        $addr = \filter_input(INPUT_POST, 'address');
        $pincode = \filter_input(INPUT_POST, 'pincode');
        $this->load->model('Authentication');
        $status = $this->Authentication->changeAddress($addr,$pincode);
        echo $status;
        return $status;
        
    }
    
    public function changeMobile(){
        $mobile = \filter_input(INPUT_POST, 'mobile');
        $this->load->model('Authentication');
        $status = $this->Authentication->changeMobile($mobile);
        echo $status;
        return $status;
        
    }
    public function forgetPass() {
        $email = \filter_input(INPUT_POST, 'email');
        $this->load->model('Authentication');
        $status = $this->Authentication->forgetPass($email);
        echo $status;
        return $status;
    }
    
    public function updatePassword(){
    	$email= \filter_input(INPUT_POST, 'email');
        $npass = \filter_input(INPUT_POST, 'npass');
        $cnpass = \filter_input(INPUT_POST, 'cnpass');
        $this->load->model('Authentication');
        $status = $this->Authentication->updatePassword($email , $npass, $cnpass);
        echo $status;
        return $status;
        
    }
    
    public function mobileSMS(){
        $mobile = \filter_input(INPUT_POST, 'mobile');
        $message = \filter_input(INPUT_POST, 'message');
        $type = \filter_input(INPUT_POST, 'type');
        $addMsg = "\r\n Thuneega Designers";
        $this->load->library('setupfile');
	    $rs = $this->setupfile->send($mobile, $message.$addMsg, $type);
	    echo 'success';
    }

}
