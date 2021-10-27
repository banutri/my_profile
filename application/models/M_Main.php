<?php

class M_Main extends CI_Model {

	function insert_message($data){
        $this->db->insert('messages',$data);
        return $this->db->affected_rows();
    }
}
