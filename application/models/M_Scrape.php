<?php

class M_Scrape extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function store($data){
        return $this->db->insert('scrape', $data);
    }
}