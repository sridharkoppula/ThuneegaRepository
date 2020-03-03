<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_det extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        session_start();
        $_SESSION['sid']= session_id();
        // load Pagination library
        $this->load->library('pagination');
         
        // load URL helper
        $this->load->helper('url');
    }
    
        public function index($pid) {

        $this->load->helper('url');
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Products');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        //print_r($data['subcat']);
        $this->load->model('Cart_model');
        $data['cart_count']= $this->Cart_model->cartCount();

        $details = array();        
            // get current page records
            $details["detail"] = $this->Products->get_productdetails($pid);
            $details["mblouses"] = $this->Products->get_sugblouses($pid);
            //print_r($details);            
            
        
        $this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('product_details', $details);
        //$this->load->view('welcome_message');
        
        $this->load->view('footer',TRUE);
    }

}

