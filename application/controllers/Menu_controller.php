<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_controller extends CI_Controller {
public function categories(){

        $this->load->model('Menu_model');
	$menu = $this->Menu_model->get_categories();

	//print_r($data);
        $this->load->view('header',$menu);
    }

}