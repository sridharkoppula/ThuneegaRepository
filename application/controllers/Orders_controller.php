<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//echo $sid;
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_start();
        $_SESSION['sid']= session_id();
        // load URL helper
        $this->load->helper('url');
        
    }

    public function orderConfirm() {
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Products');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        //print_r($data['subcat']);
        $this->load->model('Cart_model');
        $data['cart_count'] = $this->Cart_model->cartCount();
        $this->load->model('Orders_model');
        $order['invoice_det'] = $this->Orders_model->get_invoiceDetails();
        $order['order_list'] = $this->Orders_model->get_orderitems();
        $this->load->model('Authentication');
        if(!empty($_SESSION['guest_user'])){
        $order['user_add'] = $this->Authentication->getGuest($_SESSION['guest_user']);
        }  else {
        $order['user_add'] = $this->Authentication->getUser($_SESSION['user']);
        }


        $this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('orderconfirm',$order);
        $this->load->view('footer', TRUE);
    }

    public function delCart() {

        $pid = \filter_input(INPUT_POST, 'pid1');
        //echo $size2;
        $this->load->helper('url');
        //$this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $status = $this->Cart_model->del_items($pid);
        echo $status;
        return $pid;
    }

    public function getItems() {
        $this->load->helper('url');
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        $data['cart_count'] = $this->Cart_model->cartCount();
        $items = array();
        $items["list"] = $this->Cart_model->get_cartitems();
        $this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('cartitems', $items);
        $this->load->view('footer', TRUE);
    }

    public function checkotp() {
        $otp = \filter_input(INPUT_POST, 'otp');
        $email = \filter_input(INPUT_POST, 'email');
        $this->load->model('Cart_model');
        $status = $this->Cart_model->checkOTP($otp, $email);
        echo $status;
        return $status;
    }

}
