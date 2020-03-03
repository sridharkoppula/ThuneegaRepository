<?php

class Menu_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    //get job positions from the db 
    public function get_categories() {
        $this->db->select('*');
        $this->db->from('thu_item_collections');
        $query = $this->db->get();
        return $result = $query->result();

        /* $this->db->select('*');
          $this->db->from('thu_item_collections');
          $this->db->where(true);

          $parent = $this->db->get();

          $categories = $parent->result();
          $i = 0;
          foreach ($categories as $p_cat) {

          $categories[$i]->sub = $this->sub_categories($p_cat->ITEM_COLLECTION_NAME);
          $i++;
          }
          return $categories; */
    }

    public function get_categoriesID() {
        $this->db->select('*');
        $this->db->from('thu_item_collections');
        $query = $this->db->get();
        return $result = $query->result();
    }

    public function sub_categories() {
        $this->db->select('ITEM_COLLECTION_CODE');
        $this->db->from('thu_item_collections');
        $query = $this->db->get();
        $result = $query->result();
        //print_r($result);
        foreach ($result as $key => $value) {
            $this->db->select('*');
            $this->db->from('thu_collection_categories');
            $this->db->where('COLLECTION_CODE', $result[$key]->ITEM_COLLECTION_CODE);
            $query = $this->db->get();
            return $result = $query->result();
        }

        /*
          $child = $this->db->get();
          $sub_categories = $child->result();
          $i = 0;
          foreach ($sub_categories as $p_cat) {

          $sub_categories[$i]->sub = $this->sub_categories($p_cat->CATEGORY_NAME);
          $i++;
          }
          return $sub_categories; */
    }

    public function weeklyItems() {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where("id >=240 AND dealer = 'thuneega' AND visible = 'yes'  ORDER BY updationDate DESC limit 20");
            $query = $this->db->get();
            return $result = $query->result();
    }

}
