<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PUM_Payment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (session_status() == PHP_SESSION_NONE) {
    		session_start();
    		$_SESSION['sid']= session_id();
    	}
        $this->load->helper('url');        
    }

    public function index() {
        $this->load->helper('url');
        $data = array();
        //$_SESSION['guest_user]='satendraprl1@gmail.com';
        //print_r($this->session->userdata);
        $this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $this->load->model('Authentication');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        $data['cart_count'] = $this->Cart_model->cartCount();
        $items = array();
        if (!empty($_SESSION['guest_user'])) {
            $guest = $_SESSION['guest_user'];
            //$guest = $this->session->userdata('guest_user');
        }
        if (!empty($_SESSION['user'])) {
            $user = $_SESSION['user'];
            //$user = $this->session->userdata('user');
        }
        if (empty($guest)) {
            $items["user_det"] = $this->Authentication->getUser($user);
        } else {
            $items["user_det"] = $this->Authentication->getGuest($guest);
        }

        $items["list"] = $this->Cart_model->get_cartitems();
        $this->load->view('css');
        $this->load->view('header', $data);
        if(!empty($_SESSION['guest_user']) || !empty($_SESSION['user'])){
            $this->load->view('payment', $items);
        } else{
            header('Location: '.$this->config->base_url());
        }
        $this->load->view('footer', TRUE);
    }

    public function check() {
        $this->load->helper('url');
        $headerdata = array();
        $this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $this->load->model('Authentication');
        $headerdata['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $headerdata['subcat'] = $this->Menu_model->sub_categories();
        $headerdata['cart_count']= $this->Cart_model->cartCount();

        // all values are required
        $amount = $this->input->post('payble_amount');
        $product_info = $this->input->post('product_info');
        $customer_name = $this->input->post('customer_name');
        $customer_emial = $this->input->post('customer_email');
        $customer_mobile = $this->input->post('mobile_number');
        $customer_address = $this->input->post('customer_address');
        $customer_pincode = $this->input->post('customer_pincode');
        $cod_status=FALSE;
        $this->load->model('Cart_model');
        $status = $this->Cart_model->checkPin($customer_pincode);
        if($status=='Available'){
            $cod_status=TRUE;
        }

        //payumoney details


        $MERCHANT_KEY = "gtKFFx"; //change  merchant with yours
        $SALT = "eCwWELxi";  //change salt with yours 
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        //optional udf values 
        $udf1 = '';
        $udf2 = '';
        $udf3 = '';
        $udf4 = '';
        $udf5 = '';

        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
        $hash = strtolower(hash('sha512', $hashstring));

        $success = site_url() . '/Status';
        $fail = site_url() . '/Status';
        $cancel = site_url() . '/Status';


        $data = array(
            'mkey' => $MERCHANT_KEY,
            'tid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,
            'name' => $customer_name,
            'productinfo' => $product_info,
            'mailid' => $customer_emial,
            'phoneno' => $customer_mobile,
            'address' => $customer_address,
            'cod' => $cod_status,
            'action' => "https://test.payu.in", //for live change action  https://secure.payu.in
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel
        );
        $this->load->view('css');
        $this->load->view('header', $headerdata);
        $this->load->view('confirmation', $data);
        $this->load->view('footer', TRUE);
    }

}
