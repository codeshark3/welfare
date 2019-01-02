<?php
class Dashboard_model extends CI_Model
{
 // function fetch_data($query)
 // {
 //    $this->load->database();
 //  $this->db->select("*");
 //  $this->db->from("entries");
 //  $where = "approval = 'pending'";
 //  $this->db->where($where, NULL, FALSE);
 //  if($query != '')
 //  {
 //   $this->db->like('case_no', $query);
 //   $this->db->or_like('folder_no', $query);
 //   $this->db->or_like('serial_no', $query);
 //   $this->db->or_like('last_name', $query);
 //   $this->db->or_like('first_name', $query);
 //   $this->db->or_like('approval', $query);
  
 //  }
 //  $this->db->order_by('id', 'DESC');
 //  return $this->db->get();
 // }
 public function __construct(){
            $this->load->database();
        }

  var $table = "entries";  
      var $select_column = array("id", "first_name", "last_name", "folder_no","case_no","serial_no","total","approval");  
      var $order_column = array(null, "first_name", "last_name",null,null); 
      var $where ="approval = 'pending'";
       
      
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);
          
   // $this->db->where($this->where);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("first_name", $_POST["search"]["value"]);  
                $this->db->or_like("last_name", $_POST["search"]["value"]);  

                $this->db->or_like("folder_no", $_POST["search"]["value"]); 
                $this->db->or_like("approval", $_POST["search"]["value"]);   
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
          // $query = $this->db->get_where($this->where);  
         // $query =$this->db->get_where( array($this->table,"approval" => 'pending'));
          $query = $this->db->get();
            //$query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get(); 
          // $query = $this->db->get_where($this->where); 
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table);
         //  $this->db->where($this->where);  
           return $this->db->count_all_results();  
      }  
          
            //



}
?>

