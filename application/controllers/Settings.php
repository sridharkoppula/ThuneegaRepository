<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();        
        session_start();
        $_SESSION['sid']= session_id();
        // load URL helper
        $this->load->helper('url');
    }
    
    public function index() {

        $this->load->helper('url');
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Products');
        $this->load->model('Cart_model');
        $this->load->model('Authentication');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        //print_r($data['subcat']);
        $data['cart_count']= $this->Cart_model->cartCount();
        
        $params = array();
        $params["results"] = $this->Authentication->getUser($_SESSION['user']);
        //$this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('settings',$params);
       // $this->load->view('welcome_message');
        $this->load->view('footer',TRUE);
    }

    public function custom() {
    
    }

}
