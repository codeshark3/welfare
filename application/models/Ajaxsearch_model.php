<?php
class Ajaxsearch_model extends CI_Model
{
 function fetch_data($query)
 {
    $this->load->database();
  $this->db->select("*");
  $this->db->from("entries");
  if($query != '')
  {
   $this->db->like('case_no', $query);
   $this->db->or_like('folder_no', $query);
   $this->db->or_like('serial_no', $query);
   $this->db->or_like('last_name', $query);
   $this->db->or_like('first_name', $query);
   $this->db->or_like('approval', $query);
  
  }
  $this->db->order_by('id', 'DESC');
  return $this->db->get();
 }
}
?>
