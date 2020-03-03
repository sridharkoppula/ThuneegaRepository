<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function get_current_page_records($cat, $limit, $start) {

        $this->db->where("COLLECTION_CAT_CODE='$cat'");
        $check_query = $this->db->get("thu_collection_categories");
        if ($check_query->num_rows() > 0) {
            $subcat = $check_query->row();
            $subCategory = $subcat->CATEGORY_NAME;
            $this->db->limit($limit, $start);
            $this->db->order_by("postingDate", "desc");
            $this->db->where("subCategory='$subCategory' AND visible='yes'");
            $query = $this->db->get("products");
        } else {
            $this->db->limit($limit, $start);
            $this->db->order_by("postingDate", "desc");
            $this->db->where("cat_name='$cat' AND visible='yes'");
            $query = $this->db->get("products");
        }
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    public function get_total() {
        return $this->db->count_all("products");
    }

    public function get_blouses($lim, $st) {
        $this->db->select('*');
        $this->db->from('products');
        //$this->db->where("cat_name='saree'");
        $this->db->order_by("postingDate", "desc");
        $this->db->limit($lim, $st);
        $query = $this->db->get();
        $result = $query->result();
        //print_r($result[0]->subCategory);
        $pids = array();
        for ($i = 0; $i < sizeof($result); $i++) {
            //array_push($pids, $result[$i]->subCategory);
            $pids[$result[$i]->id] = $result[$i]->subCategory;
        }
        //print_r($pids);
        $bids = array();
        foreach ($pids as $key => $value) {
            $query1 = $this->db->query("SELECT * FROM `products` WHERE `tags` LIKE '%$key%' and `cat_name` = 'blouse' and visible='yes' and productAvailability<>0 ;");
            //$count=$this->db->count_all();       
            $result1 = $query1->result();
            $count = \sizeof($result1);
            if ($count > 0) {

                array_push($bids, $key);
            }
        }
        //print_r(array_unique($bids, SORT_REGULAR));

        return array_unique($bids, SORT_REGULAR);
    }

    public function get_productdetails($pid) {
        $query = $this->db->query("SELECT * FROM `products` WHERE id=$pid and visible='yes' ;");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $pdata[] = $row;
            }

            return $pdata;
        }

        return false;
    }

    public function get_sugblouses($pid) {
        $query = $this->db->query("SELECT * FROM `products`  WHERE `tags`   LIKE  '%$pid%' and cat_name='blouse' and visible='yes' and productAvailability <> 0 order by id limit 4 ;");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $bdata[] = $row;
            }
            //print_r($bdata);
            return $bdata;
        }

        return false;
    }

}
