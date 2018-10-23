<?php
    class Entry_model extends CI_Model{
        public function __constructs(){
            $this->load->database();
        }
  

    public function get_entry($folder_no = FALSE){
        if($folder_no === FALSE){
            $query = $this->db->get('entries');
            return $query->result_array();
        }
        
        $query = $this->get_where('entries', array('slug' => $folder_no));
        return $query->row_array();
    }
  }