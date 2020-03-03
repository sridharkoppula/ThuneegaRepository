<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $sid = session_id();
*/
//echo $sid;
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (session_status() == PHP_SESSION_NONE) {
    		session_start();
    	}
        // load URL helper
        $this->load->helper('url');
    }

    public function addCart() {
        $pid = $this->input->post('pid1');
        $size2 = $this->input->post('size1');
        if (empty($_SESSION[ 'user' ] )) {
            $sid = session_id();
        } else {
            $sid = $_SESSION['user'];
        }
        //echo $sid;
        $this->load->helper('url');
        //$this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $status = $this->Cart_model->add_items($pid, $size2, $sid);
        echo $status;
        return $pid;
    }
    
    public function delCart() {

        $pid = \filter_input(INPUT_POST, 'pid1');        
        //echo $size2;
        if (empty($_SESSION[ 'user' ])) {
            $sid = session_id();
        } else {
            $sid = $_SESSION[ 'user' ];
        }
        
        //$this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $status = $this->Cart_model->del_items($pid, $sid);
        echo $status;
        return $pid;
    }
    
    public function getCartcount(){
        $this->load->model('Cart_model');
        $count = $this->Cart_model->cartCount();
        echo $count;
        return $count;
    }

        public function addWish() {
            if (!empty($_SESSION['user'])) {
            $sid = $_SESSION['user'];
            $user_guest = 'user';
        } else if (!empty($_SESSION['guest_user'])) {
            $sid = $_SESSION['guest_user'];
            $user_guest = 'guest';
        } else {
            $sid = session_id();
            echo 'Please login';
            return 'Please login';
        }

        $pid = \filter_input(INPUT_POST, 'pid1');
        //echo $size2;
        $this->load->helper('url');
        //$this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $status = $this->Cart_model->add_wishlist($pid, $sid, $user_guest);
        echo $status;
        return $pid;
    }
    
    public function getItems() {
        $this->load->helper('url');
        if (empty($_SESSION[ 'user' ] )) {
            $sid = session_id();
        } else {
            $sid = $_SESSION['user'];
        }
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        $data['cart_count']= $this->Cart_model->cartCountP($sid);
        $items=array();
        $items["list"] = $this->Cart_model->get_cartitems();
        $this->load->view('css');
        $this->load->view('header', $data);        
        $this->load->view('cartitems', $items);
        $this->load->view('footer',TRUE);
    }
    //checking cod available or not
    public function checkpin() {
        $pincode = \filter_input(INPUT_POST, 'pincode');
        $this->load->model('Cart_model');
        $status = $this->Cart_model->checkPin($pincode);
        echo $status;
        return $status;
    }
    //OTP Validation
    public function checkotp() {
        $otp = \filter_input(INPUT_POST, 'otp');
        $email = \filter_input(INPUT_POST, 'email');
        $this->load->model('Cart_model');
        $status = $this->Cart_model->checkOTP($otp,$email);
        if($status != "invalid"){
            $_SESSION['guest_user']=$email;
        }
        echo $status;
        return $status;
    }
    
    public function checkotpUser() {
        $otp = \filter_input(INPUT_POST, 'otp');
        $email = \filter_input(INPUT_POST, 'email');
        $this->load->model('Cart_model');
        $status = $this->Cart_model->checkotpUser($otp,$email);
        if($status != "invalid"){
            $_SESSION['user']=$email;
        }
        echo $status;
        return $status;
    }
    
    //Whishlist
    public function getWishlist() {
        $this->load->helper('url');
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        $data['cart_count']= $this->Cart_model->cartCount();
        $items=array();
        $items["list"] = $this->Cart_model->get_wishitems();
        $this->load->view('css');
        $this->load->view('header', $data);        
        $this->load->view('wishitems', $items);
        $this->load->view('footer',TRUE);
    }
    
    public function delWish() {

        $pid = \filter_input(INPUT_POST, 'pid1');        
        //echo $size2;
        $this->load->helper('url');
        //$this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $status = $this->Cart_model->del_wishitems($pid);
        echo $status;
        return $pid;
    }
    
    public function getOrders() {
        $this->load->helper('url');
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        $data['cart_count']= $this->Cart_model->cartCount();
        $items=array();
        $items["invoice"] = $this->Cart_model->get_invoice();
        $items["list"] = $this->Cart_model->get_orders();
        $this->load->view('css');
        $this->load->view('header', $data);        
        $this->load->view('orders', $items);
        $this->load->view('footer',TRUE);
    }

}
