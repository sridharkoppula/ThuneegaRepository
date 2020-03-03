<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

    function __construct() {
        parent::__construct();
        if (session_status() == PHP_SESSION_NONE) {
    		 session_start();
    	}
        $this->load->helper('url');
        $this->load->database();
    }

    public function getUserIP() {
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }

    public function add_items($pid, $size, $sid) {
        $IP_Add = 'ip_add';
        $myTimeZone = date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d H:i:s");
        //$this->db->insert('payment', $add);
        $query = $this->db->query("SELECT * FROM `cart_items` WHERE product_id=$pid and size='$size' and user_id='$sid' ;");
        if ($query->num_rows() > 0) {
            return 'Item already in your Cart';
        } else {
            $this->db->set('product_id', $pid);
            $this->db->set('quantity', 1);
            $this->db->set('size', $size);
            $this->db->set('user_id', $sid);
            $this->db->set('IP_Add', $IP_Add);
            $this->db->set('created', $date);
            $this->db->set('modified', $date);
            $this->db->insert('cart_items');
            //$query = $this->db->query("INSERT into `cart_items`(`product_id`, `quantity`,`size`, `user_id`, `IP_Add`, `created`, `modified`) VALUES ('$pid',1,'$size', '$sid','$IP_Add','$date','$date')");
            return 'Item added';
        }

        return false;
    }
    
    public function del_items($pid, $sid) {
           
        $array = array('product_id' => $pid, 'user_id' => $sid);
        $this->db->where($array);
        $this->db->delete('cart_items');
            return 'Item Deleted';


        return false;
    }

    public function add_wishlist($pid, $sid, $user_guest) {
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d H:i:s");
        $query = $this->db->query("SELECT * FROM `wishlist` WHERE product_id=$pid and user_id='$sid' ;");
        if ($query->num_rows() > 0) {
            return 'Item already in your wishlist';
        } else {
            $this->db->set('product_id', $pid);
            $this->db->set('quantity', 1);
            $this->db->set('user_id', $sid);
            $this->db->set('user-guest', $user_guest);
            $this->db->set('added_date', $date);
            $this->db->insert('wishlist');
            //$query = $this->db->query("INSERT into `cart_items`(`product_id`, `quantity`,`size`, `user_id`, `IP_Add`, `created`, `modified`) VALUES ('$pid',1,'$size', '$sid','$IP_Add','$date','$date')");
            return 'Item added';
        }

        return false;
    }

    public function cartCount() {
        if (empty($_SESSION['user'])) {
            $sid = session_id();
        } else {
            $sid = $_SESSION['user'];
        }
        $query = $this->db->query("SELECT * FROM `cart_items` WHERE user_id='$sid' ");
        $count = $query->num_rows();
        return $count;
    }
    
    public function cartCountP($csid) {
        $query = $this->db->query("SELECT * FROM `cart_items` WHERE user_id='$csid' ");
        $count = $query->num_rows();
        return $count;
    }

    public function get_cartitems() {
        if (empty($_SESSION['user'])) {
            $sid = session_id();
        } else {
            $sid = $_SESSION['user'];
        }
        $this->db->select('cart_items.*,products.*');
        $this->db->from('cart_items');
        $this->db->join('products', 'cart_items.product_id = products.id AND cart_items.user_id="'.$sid.'"', 'inner outer');
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
    
    public function checkPin($pincode){
        //return 'model';
        $this->db->select('*');
        $this->db->from('delivery_codes');
        $this->db->where('pincode="'.$pincode.'"');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
                return 'Available';
            
        } else {
            return 'COD not available';
        }

        return false;
    }
    
    public function checkOTP($otp,$email){
        //return 'model';
        
        $this->db->select('*');
        $this->db->from('guest-user');
        $this->db->where('email="'.$email.'" AND otp='.$otp);
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $_SESSION['guest_user']=$email;
            $_SESSION['guest_verify']="yes";
            //$this->nativesession->set('guest_user',$email);
            $newotp = mt_rand(100000, 999999);
            $query1 = $this->db->query("update `guest-user` set otp=$newotp WHERE email='$email'");
                return json_encode($query->result());
            
        } else {
            return 'invalid';
        }

        return false;
    }
    
    public function checkotpUser($otp,$email){
        //return 'model';
        
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email="'.$email.'" AND forgot_pass='.$otp);
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            //$this->nativesession->set('guest_user',$email);
            $newotp = mt_rand(100000, 999999);
            $query1 = $this->db->query("update `guest-user` set otp=$newotp WHERE email='$email'");
                return 'valid';
            
        } else {
            return 'invalid';
        }

        return false;
    }

    
    //whislist items
    public function get_wishitems() {
        if (empty($_SESSION['user'])) {
            $sid = session_id();
        } else {
            $sid = $_SESSION['user'];
        }

        $this->db->select('wishlist.*,products.*');
        $this->db->from('wishlist');
        $this->db->join('products', 'wishlist.product_id = products.id AND wishlist.user_id="'.$sid.'"', 'inner outer');
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
    
    
    //delete wishlist item
    
        public function del_wishitems($pid) {
        if (empty($_SESSION['user'])) {
            $sid = session_id();
        } else {
            $sid = $_SESSION['user'];
        }   
        $array = array('product_id' => $pid, 'user_id' => $sid);
        $this->db->where($array);
        $this->db->delete('wishlist');
            return 'Item Deleted';


        return false;
    }
    public function get_orders() {
        if (empty($_SESSION['user'])) {
           $sid = $_SESSION['guest_user'];
        } else {
            $sid = $_SESSION['user'];
        }

        $this->db->select('orders.*,products.*');
        $this->db->from('orders');
        $this->db->join('products', 'orders.product_id = products.id AND orders.user_id="'.$sid.'"', 'inner outer');
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
    public function get_invoice() {
        if (empty($_SESSION['user'])) {
            $sid = $_SESSION['guest_user'];
        } else {
            $sid = $_SESSION['user'];
        }

        $this->db->select('invoice.*');
        $this->db->from('invoice');
        $this->db->where('user_id="'.$sid.'"');
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

}
