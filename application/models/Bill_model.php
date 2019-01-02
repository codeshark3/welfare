<?php
class Bill_model extends CI_Model
{

    public function __construct(){
            $this->load->database();
        }
  
////////////////////////////////////////////////////////////////////////////
         var $table = "bill";  
      var $select_column = array("bill_id", "patient_name", "folder_no", "total","receipt_no","balance");  
      var $order_column = array(null, "patient_name", "folder_no", null, null,null); 

        
      
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("patient_name", $_POST["search"]["value"]);  
                $this->db->or_like("folder_no", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('bill_id', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
      }  

  public function get_bill($folder_no = FALSE){    
      if($folder_no === FALSE){
          //$this->db->order_by('id', 'DESC');
          $query = $this->db->get('bill');
          return $query->result_array();
      }
      
      $query = $this->db->get_where('bill', array('folder_no' => $folder_no));
      return $query->row_array();
      }

///////////////////////////////////////////////////////////////////////////////////////


  function fetch_data($query)
 {
    $this->load->database();
  $this->db->select("*");
  $this->db->from("bill");
  if($query != '')
  {
   $this->db->like('patient_name', $query);
   $this->db->or_like('folder_no', $query);
   $this->db->or_like('sub_date', $query);
   $this->db->or_like('total', $query);
   $this->db->or_like('receipt_no', $query);
   $this->db->or_like('total_payment', $query);
  
  }
  $this->db->order_by('bill_id', 'DESC');
  return $this->db->get();
 }

        public function create(){
            $folder_no = url_title($this->input->post('folder_no'));

            $data = array(
                'patient_name' =>$this->input->post('patient_name'),
                // 'folder_no' => $this->input->bill('folder_no'),
                'folder_no' => $folder_no,

                'entry_date' =>$this->input->post('entry_date'),
                
                'sub_date' =>$this->input->post('sub_date'),
               
                'drug_bill' =>$this->input->post('drug_bill'),'service_bill' =>$this->input->post('service_bill'),
                'total' =>$this->input->post('total'),
                'balance' =>$this->input->post('balance'),
                'receipt_no' =>$this->input->post('reciept_no'),
                'payment' =>$this->input->post('payment'),
                'total_payment' =>$this->input->post('total_payment'),
                'sw_name' =>$this->input->post('sw_name'),
                'sw_date' =>$this->input->post('sw_date'), 
                'accountant_name' =>$this->input->post('accountant_name'),
                'acc_date' =>$this->input->post('acc_date'),
                'remarks' =>$this->input->post('remarks'),
               

            );
            return $this->db->insert('bill',$data);
        }

        public function update_bill(){
          
            $folder_no = url_title($this->input->post('folder_no'));
      $data = array(
         'patient_name' =>$this->input->post('patient_name'),
                // 'folder_no' => $this->input->bill('folder_no'),
                'folder_no' => $folder_no,

                'entry_date' =>$this->input->post('entry_date'),
                
                'sub_date' =>$this->input->post('sub_date'),
               
                'drug_bill' =>$this->input->post('drug_bill'),
                'service_bill' =>$this->input->post('service_bill'),
                'total' =>$this->input->post('total'),
                'balance' =>$this->input->post('balance'),
                'receipt_no' =>$this->input->post('receipt_no'),
                'total_payment' =>$this->input->post('total_payment'),
                'sw_name' =>$this->input->post('sw_name'),
                'sw_date' =>$this->input->post('sw_date'), 
                'accountant_name' =>$this->input->post('accountant_name'),
                'acc_date' =>$this->input->post('acc_date'),
                'remarks' =>$this->input->post('remarks'),
               
                
      );
      $this->db->where('bill_id', $this->input->post('bill_id'));
      return $this->db->update('bill', $data);
        }
        
        
        public function get_dashboard($folder_no = FALSE){    
            print_r($folder_no);
            if($folder_no === FALSE){
               // $results = array();
                //$this->db->order_by('id', 'DESC');
                $query = $this->db->get('entries');
              
               //$query = $this->db->get_where('entries', array('approval'=>$pending));

                //return $query->result_array();
                //if($query->num_rows() > 0) {
                //    $results = $query->result();
               // }
               // return $results;
                return $query->row_array();
            }
            
           
            //$array = array('name' => $name, 'title' => $title, 'status' => $status
            //$this->db->where($array); 
               
            
           
            }
}

