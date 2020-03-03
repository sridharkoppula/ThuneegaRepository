<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

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
 
        // load Pagination library
        $this->load->library('pagination');
         
        // load URL helper
        $this->load->helper('url');
        $this->load->library('email');
    }
    
    public function index() {

        $this->load->helper('url');
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Products');
        $this->load->model('Cart_model');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        //print_r($data['subcat']);
        $items['weeklyItem'] = $this->Menu_model->weeklyItems();
        $data['cart_count']= $this->Cart_model->cartCount();

        $params = array();
        $limit_per_page = 30;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->Products->get_total();
        if ($total_records > 0) {
            // get current page records
            $params["results"] = $this->Products->get_current_page_records($limit_per_page, $start_index);
            $params["mblouses"] = $this->Products->get_blouses($limit_per_page, $start_index);
            //print_r($params);
            $config['base_url'] = base_url() . 'index.php/test/index';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;

            $this->pagination->initialize($config);

            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
        $this->email->to('satendrand@gmail.com');
	$this->email->from('support@thuneegadesigners.com','Thuneega');
	$this->email->subject('Test Email (TEXT)');
	$this->email->message('Text email testing by CodeIgniter Email library.');
	$this->email->send();
        $this->load->view('css');
        $this->load->view('header', $data);
        //$this->load->view('settings');
       // $this->load->view('homecarousel');
        //$this->load->view('weeksale', $items);
        //  $this->load->view('test', $params);
       // $this->load->view('welcome_message');
        //$this->load->view('footer',TRUE);
    }

    public function custom() {
        // load db and model
        $this->load->database();
        $this->load->model('Products');

        // init params
        $params = array();
        $limit_per_page = 2;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->Products->get_total();

        if ($total_records > 0) {
            // get current page records
            $params["results"] = $this->Products->get_current_page_records($limit_per_page, $page * $limit_per_page);
            $params["mblouses"] = $this->Products->get_blouses($limit_per_page, $page * $limit_per_page);
            $config['base_url'] = base_url() . 'welcome/custom';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;

            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;

            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';

            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<span class="firstlink">';
            $config['first_tag_close'] = '</span>';

            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<span class="lastlink">';
            $config['last_tag_close'] = '</span>';

            $config['next_link'] = 'Next Page';
            $config['next_tag_open'] = '<span class="nextlink">';
            $config['next_tag_close'] = '</span>';

            $config['prev_link'] = 'Prev Page';
            $config['prev_tag_open'] = '<span class="prevlink">';
            $config['prev_tag_close'] = '</span>';

            $config['cur_tag_open'] = '<span class="curlink">';
            $config['cur_tag_close'] = '</span>';

            $config['num_tag_open'] = '<span class="numlink">';
            $config['num_tag_close'] = '</span>';

            $this->pagination->initialize($config);

            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
        $this->load->view('products', $params);
    }
	public function testEmail(){
		$this->load->library('email');

$config['protocol']    = 'smtp';
$config['smtp_host']    = 'ssl://smtp.gmail.com';
$config['smtp_port']    = '587';
$config['smtp_timeout'] = '7';
$config['smtp_user']    = 'designersthuneega@gmail.com';
$config['smtp_pass']    = 'Hapa3344$';
$config['charset']    = 'utf-8';
$config['newline']    = "\r\n";
$config['mailtype'] = 'text'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not      

$this->email->initialize($config);

$this->email->from('designersthuneega@gmail.com', 'Thuneega Designers');
$this->email->to('satendrand@gmail.com'); 
$this->email->subject('Email Test');
$this->email->message('Testing the email class.');  

$this->email->send();

echo $this->email->print_debugger();
	}

}
