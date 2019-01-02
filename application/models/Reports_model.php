<?php
Class Reports_model extends CI_Model{
  
       public function __construct() {
            // parent::__construct();
              $this->load->database();
  
 		}    

 var $table = "entries";  
      var $select_column = array("id", "first_name", "last_name", "folder_no","case_no","serial_no","date","due_date","total","approval");  
      var $order_column = array(null, "first_name", "last_name", null, null); 
     var $where ="'DATEDIFF(`due_date`,`date`)<=100'";
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           //$this->db->where('DATEDIFF(`due_date`,`date`)'<=100);
           $this->db->where($this->where);
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("first_name", $_POST["search"]["value"]);  
                $this->db->or_like("last_name", $_POST["search"]["value"]);  

                $this->db->or_like("folder_no", $_POST["search"]["value"]);  
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
           // $query =  $this->db->query('SELECT * FROM `entries` WHERE DATEDIFF(`due_date`,`date`)<=100');
         $query=$this->db->get();  
          // $query = $this->db->get_where("where 'DATEDIFF(`due_date`,`date`)<=100'");
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
          $query = $this->db->get(); 
            
          // $query = $this->db->get_where("where 'DATEDIFF(`due_date`,`date`)<=100'"); 
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
       
          $this->db->select("*");  
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
     // $query = $this->db->query('SELECT * FROM `entries` WHERE DATEDIFF(`due_date`,`date`)<=100');
     //    return $query->result_array();
      }  



public function get_report($folder_no = FALSE){


            if($folder_no === FALSE){
                //$this->db->order_by('id', 'DESC');
                $query = $this->db->query('SELECT * FROM `entries` WHERE DATEDIFF(`due_date`,`date`)<=100');
                return $query->result_array();
            }
            
            $query = $this->db->get_where('entries', array('folder_no' => $folder_no));
            return $query->row_array();

}

















// public function report(){
// // $start = $this->db->select('date');
// //  $end =	$this->db->select('due_date');
// //   $this->db->from("entries");

  
  
// //  $interval = date_diff($start, $end);

// //   $val = $interval->format('%R%a days');
// // $query = $this->db->query('SELECT payment_date,due_date FROM entries');
//   $query = $this->db->get_where('entries','DATEDIFF(due_date, date) >=',  365); 
//    return $query->row_array();
// // foreach ($query->result_array() as $row)
// // {
// //         // $start = $row['payment_date'];
// //         // $end = $row['due_date'];
      

// //         // $interval = date_diff($start,$end>=',  365);
// //         // echo $interval;
// // }




	
}