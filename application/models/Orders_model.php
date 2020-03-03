<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $sid = session_id();
} else {
    $sid = session_id();
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('email');
    }

    public function createInvoice($txnid, $amount, $email) {
        if (empty($_SESSION['user'])) {
            $sid = session_id();
            $user = $_SESSION['guest_user'];
        } else {
            $sid = $_SESSION['user'];
            $user = $_SESSION['user'];
        }
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d H:i:s");
        $status = 'Order placed';
        $this->db->set('txnid', $txnid);
        $this->db->set('invoice_amount', $amount);
        $this->db->set('user_id', $email);
        $this->db->set('order_date', $date);
        $this->db->set('status', $status);
        $this->db->insert('invoice');
        return 'Invoice Success';
    }

    public function addOrders() {
        if (empty($_SESSION['user'])) {
            $sid = session_id();
            $user = $_SESSION['guest_user'];
            $user_r_guest = 'guest';
        } else {
            $sid = $_SESSION['user'];
            $user = $_SESSION['user'];
            $user_r_guest = 'user';
        }

        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d H:i:s");
        //$this->db->insert('payment', $add);
        $invr_query = $this->db->query("SELECT * FROM `invoice` WHERE user_id='$user' ORDER BY `order_date` DESC limit 1 ;");
        //$invr_query = $this->db->get();
        $ret = $invr_query->row();
        $inv_num = $ret->invoice_id;
        $status = $ret->status;
        $txnid = $ret->txnid;
        if (preg_match("/\bCOD\b/i", $txnid)) {
            $payment_option = 'COD';
        } else {
            $payment_option = 'online';
        }
        $query = $this->db->query("SELECT * FROM `cart_items` WHERE user_id='$sid' ;");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $this->db->set('invoice_num', $inv_num);
                $this->db->set('status', $status);
                $this->db->set('product_id', $row->product_id);
                $this->db->set('quantity', $row->quantity);
                $this->db->set('size', $row->size);
                $this->db->set('user_id', $user);
                $this->db->set('user_guest', $user_r_guest);
                $this->db->set('txnid', $txnid);
                $this->db->set('payment', $payment_option);
                $this->db->set('added_date', $date);
                $this->db->insert('orders');

                $this->db->query("update `products` set productAvailability=productAvailability-1 WHERE  id=$row->product_id;");
            }
            $this->db->query("DELETE FROM `cart_items` WHERE user_id='$sid' ;");
            
            $inv_id=$this->db->query("SELECT * FROM `invoice` WHERE user_id='$user' AND txnid='$txnid' order by invoice_id desc limit 1");
		foreach($inv_id->result_array() as $row){
			$invoice_id=$row['invoice_id'];
		}
            //send email alert
            
            $body ='<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      @media only screen and (max-device-width: 480px) {
        
      }
    </style>
  </head>
  <body>
      <a href="https://www.thuneegadesigners.com" style="text-decoration: none;">
      <p><img src="https://thuneegadesigners.com/logo.png" alt="Thuneega Designers" /></p></a>
      <p><span style="background-color: #ffffff; color: #008080;">Hello Sir / Madam,</span></p>
      <p><span style="background-color: #ffffff; color: #003366;">Thank You for Shopping on <strong>Thuneega Designers!</strong></p>
      <p style="color: #B9024A; font-weight:bold;">Your Order number '.$invoice_id.' </p>
      <ul style="list-style-type:none">
      <li style="color: #993300;">Order Products</li>

      <table cellspacing="0" >';
	$orders1=$this->db->query("SELECT p.*, c.* from  `orders` as `c` , `products` as `p` WHERE  c.product_id=p.id AND c.user_id='$user' AND c.invoice_num=$invoice_id"); 

			foreach($orders1->result_array() as $rs)
		         {
			 	
	$body.='<tr style="padding:1%;">   
	  	<td style="padding-left:1%;width:40%;"><img  src="https://thuneegadesigners.com/gallery/product-images/sarees/'. $rs['productImage1'].'" alt="Sarees" style="width:100px; height:100px;">
	  	<div class="title-text">'.ucfirst($rs['subCategory']).'</div>
	  	</td>
                        <td ><b>Qty</b>: '.$rs['quantity'].'</td>
	  		<td ><b>Price</b>: ₹'.$rs['quantity']*$rs['productPrice'].'</td>
                        
	  	</tr>
		';
			$total1 = $total1 + $rs['productPrice'];
			} 
	$body.='<tr>
			<td><strong>Total Price</strong></td>
			<td><strong>₹ '. $total1.'</strong></td></tr>	
            
        </table>
      </ul>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;">Thanks &amp; Regards!</span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;"><a href="https://www.thuneegadesigners.com" style="text-decoration: none;"><span style="color: #ff6600;"><span style="color: #333333;">From</span> <strong>Thuneega Designers</strong></span>.</a></span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;"></span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;">       </span></p>
      <p><span style="background-color: #ffffff; color: #008080;"></span></p>
      <p><span style="background-color: #00ccff;"></span></p>
      <p></p>
  </body>
</html>';
	    $emails= array('sridharkoppula@yahoo.com', 'sridharkoppula08@gmail.com', 'satendrand@gmail.com');
	    foreach($emails as $recpt){
	    $config['mailtype'] = 'html';
	    $this->email->initialize($config);            
            $from_email='support@thuneegadesigners.com';
            $this->email->from($from_email, 'Thuneega Designers');
            $this->email->to($recpt);
            $this->email->subject('Your order @ Thuneega Designers');
            $this->email->message($body);
            $this->email->send();
	    }	    

            redirect(site_url('order/success'));
            //$query = $this->db->query("INSERT into `cart_items`(`product_id`, `quantity`,`size`, `user_id`, `IP_Add`, `created`, `modified`) VALUES ('$pid',1,'$size', '$sid','$IP_Add','$date','$date')");
            return 'Order added';
        } else {
            return 'Error while adding orders';
        }

        return false;
    }

    public function get_orderitems() {
        if (empty($_SESSION['user'])) {
            $sid = session_id();
            $user = $_SESSION['guest_user'];
            $user_r_guest = 'guest';
        } else {
            $sid = $_SESSION['user'];
            $user = $_SESSION['user'];
            $user_r_guest = 'user';
        }
        $invr_query = $this->db->query("SELECT * FROM `invoice` WHERE user_id='$user' ORDER BY `order_date` DESC limit 1 ;");
        //$invr_query = $this->db->get();
        $ret = $invr_query->row();
        $inv_num = $ret->invoice_id;

        $this->db->select('orders.*,products.*');
        $this->db->from('orders');
        $this->db->join('products', 'orders.product_id = products.id AND orders.user_id="' . $user . '" AND orders.invoice_num=' . $inv_num, 'inner outer');
        $query = $this->db->get();

//        $this->db->order_by("created", "desc");
//        $this->db->where("user_id='$sid'");
//        $query = $this->db->get("cart_items");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    public function get_invoiceDetails() {
        if (empty($_SESSION['user'])) {
            $sid = session_id();
            $user = $_SESSION['guest_user'];
            $user_r_guest = 'guest';
        } else {
            $sid = $_SESSION['user'];
            $user = $_SESSION['user'];
            $user_r_guest = 'user';
        }

        $invr_query = $this->db->query("SELECT * FROM `invoice` WHERE user_id='$user' ORDER BY `order_date` DESC limit 1 ;");

//        $this->db->order_by("created", "desc");
//        $this->db->where("user_id='$sid'");
//        $query = $this->db->get("cart_items");

        if ($invr_query->num_rows() > 0) {
            $data = array();
            $ret = $invr_query->row();
            $data['invoice_id'] = $ret->invoice_id;
            $data['status'] = $ret->status;
            $data['txnid'] = $ret->txnid;
            $data['invoice_amount'] = $ret->invoice_amount;
            $data['order_date'] = $ret->order_date;
            return $data;
        }

        return false;
    }

}
