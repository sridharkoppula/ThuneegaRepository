<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
          
        // load URL helper
        $this->load->helper('url');
    }
    
    public function index() {
        
        $this->load->model('Menu_model');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        $this->load->model('Cart_model');
        $data['cart_count']= $this->Cart_model->cartCount();
        $this->load->helper('url');
        $this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('contactus');
        $this->load->view('footer',TRUE);
    }
    
    public function feedback() {
        
        $this->load->model('Menu_model');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        $this->load->helper('url');
        $this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('feedback');
        $this->load->view('footer',TRUE);
    }
    
     public function comment() {
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d H:i:s");
        $email = \filter_input(INPUT_POST, 'email1');
        $comment = \filter_input(INPUT_POST, 'comment');
        $this->load->model('Authentication');
        $status = $this->Authentication->addComment($email,$comment,$date);
        echo $status;
        return $status;
    }


    
    

}
