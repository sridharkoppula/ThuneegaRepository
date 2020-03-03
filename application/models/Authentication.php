<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Model {

    function __construct() {
        parent::__construct();
        if (session_status() == PHP_SESSION_NONE) {
    		session_start();
    		$_SESSION['sid']= session_id();
    	}
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('email');
    }

    public function checkCredentials($email, $pass) {
        $password = md5($pass);
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email="' . $email . '" AND password="' . $password . '"');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $_SESSION['user'] = $email;
            //$this->nativesession->set('user',$email);
            return 'success';
        } else {
            return 'invalid';
        }

        return false;
    }

    public function checkEmail($email) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email="' . $email . '"');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return 'existed';
        } else {
            return 'new';
        }

        return false;
    }

    public function addUser($email, $fname, $lname, $password, $pin, $mobile, $city, $address, $pincode, $date) {


        $query = $this->db->query("INSERT INTO user(email,fname,lname,password,forgot_pass,mobile,city,address,pincode) VALUES('" . $email . "', '" . $fname . "','" . $lname . "',  '" . md5($password) . "',$pin,'" . $mobile . "','" . $city . "','" . $address . "','" . $pincode . "' )");

//            $this->db->set('email', $email);
//            $this->db->set('fname', $fname);
//            $this->db->set('lname', $lname);
//            $this->db->set('password', $password);
//            $this->db->set('forgot_pass', $pin);
//            $this->db->set('mobile', $mobile);
//            $this->db->set('city', $city);
//            $this->db->set('address', $address);
//            $this->db->set('pincode', $pincode);
//            $this->db->set('doc', $date);
//            $this->db->set('modify_date', $date);
//            $this->db->insert('user');
        if ($query) {
            /*
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
            $this->email->send(); */

            return 'success';
        } else {
            return 'Please try again later';
        }
    }

    public function addComment($email, $comment, $date) {

        $this->db->set('email', $email);
        $this->db->set('comment', $comment);
        $this->db->set('date', $date);
        $this->db->insert('comment');

        //$query = $this->db->query("INSERT INTO `comment`(email,comment) VALUES('" . $email . "', '" . $comment . "')");   

        return 'success';
    }

    public function checkGuest($email) {
        // var_dump($email);
        $this->db->select('*');
        $this->db->from('guest-user');
        $this->db->where('email="' . $email . '"');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            //$_SESSION['guest_user'] = $email;
           //$this->nativesession->set('guest_user',$email);
           $result = $query->result();
           // var_dump($result);
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
                    <p><img src="https://thuneegadesigners.com/logo.png" alt="Thuneega Designers" /></p>
                </a>
                <p><span style="background-color: #ffffff; color: #008080;">Dear Sir / Madam,</span></p>
                <p><span style="background-color: #ffffff; color: #003366;">Your otp for <strong>Thuneega Designers</strong> login is '.$result["otp"].'</p>';
                $body.='<p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;">Thanks &amp; Regards!</span></span></p>
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
         return json_encode($result);
        } else {
            $_SESSION['guest_user'] = '';
            //$this->nativesession->set('guest_user','');
            return 'new';
        }
        return false;
    }

    public function addGuest($email, $fname, $lname, $pin, $mobile, $city, $address, $pincode, $date,$map_loc) {
        //echo 'Model';
        $gsid = session_id();
        $query = $this->db->query("INSERT INTO `guest-user`(email,fname,lname,session_id,mobile,city,address,maps_address,pincode,otp,doc) VALUES('" . $email . "', '" . $fname . "','" . $lname . "','" . $gsid . "', '" . $mobile . "','" . $city . "','" . $address . "','" . $map_loc . "','" . $pincode . "'," . $pin . ",'" . $date . "' )");

//        $this->db->set('email', $email);
//        $this->db->set('fname', $fname);
//        $this->db->set('lname', $lname);
//        $this->db->set('mobile', $mobile);
//        $this->db->set('city', $city);
//        $this->db->set('address', $address);
//        $this->db->set('pincode', $pincode);
//        $this->db->set('doc', $date);
//        $this->db->set('modify_date', $date);
//        $query=$this->db->insert('guest-user');
        if ($query) {
            $_SESSION['guest_user'] = $email;
            $_SESSION['user'] = '';
            // $this->nativesession->set('guest_user',$email);
            return 'success';
        } else {
            return 'Please try again later';
        }
    }
    
    public function updateGuest($email, $fname, $lname, $pin, $mobile, $city, $address, $pincode, $date,$map_loc) {
        //echo 'Model';
        $gsid = session_id();
        $sid = session_id();
        $query = $this->db->query("UPDATE `guest-user` SET email='" . $email . "',fname='" . $fname . "',lname='" . $lname . "',session_id='" . $gsid . "',mobile='" . $mobile . "',city='" . $city . "',address='" . $address . "',maps_address='" . $map_loc . "',pincode='" . $pincode . "',otp=" . $pin . ",modify_date= '" . $date . "' WHERE email='".$email."'");

//        $this->db->set('email', $email);
//        $this->db->set('fname', $fname);
//        $this->db->set('lname', $lname);
//        $this->db->set('mobile', $mobile);
//        $this->db->set('city', $city);
//        $this->db->set('address', $address);
//        $this->db->set('pincode', $pincode);
//        $this->db->set('doc', $date);
//        $this->db->set('modify_date', $date);
//        $query=$this->db->insert('guest-user');
        if ($query) {
           $_SESSION['guest_user'] = $email;
           $_SESSION['user'] = '';
           // $this->nativesession->set('guest_user',$email);
            return 'success';
        } else {
            return 'Please try again later';
        }
    }
    
    public function getUser($user) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email="' . $user . '"');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return json_encode($query->result());
        } else {
            return 'Something went wrong';
        }

        return false;
    }
    
    public function getGuest($guest) {
        $this->db->select('*');
        $this->db->from('guest-user');
        $this->db->where('email="' . $guest . '"');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return json_encode($query->result());
        } else {
            return 'Something went wrong';
        }

        return false;
    }
    
    public function changePassword($cpass, $npass, $cnpass){
        $email= $_SESSION['user'];
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email="' . $email . '" AND password="' . md5($cpass) . '"');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $query = $this->db->query("UPDATE `user` SET password='" . md5($npass) . "' WHERE email='".$email."'");
            return 'success';
        } else {
            return 'Something went wrong';
        }

        return false;
        
    }
    
    public function changeAddress($addr,$pincode){
        $email= $_SESSION['user'];     
        $query = $this->db->query("UPDATE `user` SET address='" . $addr. "',pincode='".$pincode."' WHERE email='".$email."'");            
        if ($query) {
            return 'success';
        } else {
            return 'Something went wrong';
        }

        return false;
    }
    
     public function changeMobile($mobile){
        $email= $_SESSION['user'];   
        $query = $this->db->query("UPDATE `user` SET mobile='" . $mobile. "' WHERE email='".$email."'");            
        if ($query) {
            return 'success';
        } else {
            return 'Something went wrong';
        }

        return false;
    }
    
    public function forgetPass($email) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email="' . $email . '"');
        $this->db->limit(1);
        $reault_array = $this->db->get()->result_array();

        if (!empty($reault_array)) {
            $body=$reault_array[0]['forgot_pass'];
            $config['mailtype'] = 'html';
	    $this->email->initialize($config);            
            $from_email='support@thuneegadesigners.com';
            $this->email->from($from_email, 'Thuneega Designers');
            $this->email->to($email);
            $this->email->subject('Password reset @ Thuneega Designers');
            $this->email->message($body);
            $this->email->send();
            return 'existed';
        } else {
            return 'new';
        }

        return false;
    }
    
    public function updatePassword($email, $npass, $cnpass){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email="' . $email . '"');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $query = $this->db->query("UPDATE `user` SET password='" . md5($npass) . "' WHERE email='".$email."'");
            return 'success';
        } else {
            return 'Something went wrong';
        }

        return false;
        
    }

}
