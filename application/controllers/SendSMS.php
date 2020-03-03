<?php
//session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class SendSMS extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (session_status() == PHP_SESSION_NONE) {
    		session_start();
    		$_SESSION['sid']= session_id();
    	}
        // load URL helper
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('sendsms');
        //$this->load->view('welcome_message');
    }
}