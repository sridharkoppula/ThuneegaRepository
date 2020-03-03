<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->helper('url');
        $data = array();
        $this->load->model('Menu_model');
        $this->load->model('Cart_model');
        $this->load->model('Authentication');
        $data['result'] = $this->Menu_model->get_categories();
        //print_r($data);
        $data['subcat'] = $this->Menu_model->sub_categories();
        $data['cart_count'] = $this->Cart_model->cartCount();


        $status = $this->input->post('status');
        if (empty($status)) {
            redirect('PUM_Payment');
        }

        $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo');
        $email = $this->input->post('email');
        $salt = "dxmk9SZZ9y"; //  Your salt
        $add = $this->input->post('additionalCharges');
        If (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {
            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
        $data['hash'] = hash("sha512", $retHashSeq);
        $data['amount'] = $amount;
        $data['txnid'] = $txnid;
        $data['posted_hash'] = $posted_hash;
        $data['status'] = $status;
        $this->load->view('css');
        $this->load->view('header', $data);
        if ($status == 'success') {
            $this->load->model('Orders_model');
            $data['add_invoice'] = $this->Orders_model->createInvoice($txnid, $amount, $email);
            $data['add_order'] = $this->Orders_model->addOrders();

            $this->load->view('success', $data);
        } else {
            $this->load->view('fail', $data);
        }
        $this->load->view('footer', TRUE);
    }

    public function placeCOD() {
        $amount = \filter_input(INPUT_POST, 'amount');
        $email = \filter_input(INPUT_POST, 'email');

        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = 'COD-';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $txnid = generateRandomString();

        $this->load->model('Orders_model');
        $data['add_invoice'] = $this->Orders_model->createInvoice($txnid, $amount, $email);
        $data['add_order'] = $this->Orders_model->addOrders();
        echo 'success';
    }

}
