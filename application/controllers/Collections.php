<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collections extends CI_Controller {

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
    public function __construct() {
        parent::__construct();

        // load Pagination library
        $this->load->library('pagination');

        // load URL helper
        $this->load->helper('url');
    }

    public function index() {

        $this->load->helper('url');
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Category_model');
        $this->load->model('Cart_model');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        $data['cart_count'] = $this->Cart_model->cartCount();
        //print_r($data['subcat']);

 
        $this->load->view('css');
        $this->load->view('header', $data);
        $this->load->view('collections',$data);
        $this->load->view('footer', TRUE);
    }

}
