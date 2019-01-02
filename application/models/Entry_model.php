<?php
    class Entry_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
      var $table = "entries";  
      var $select_column = array("id", "first_name", "last_name", "folder_no","case_no","serial_no","total","approval");  
      var $order_column = array(null, "first_name", "last_name", null, null); 
        
      
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);
          
           
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
          
            //



        public function get_entry($folder_no = FALSE){ 
       
            if($folder_no === FALSE){
                //$this->db->order_by('id', 'DESC');
                $query = $this->db->get('entries');
                return $query->result_array();
            }
            
            $query = $this->db->get_where('entries', array('folder_no' => $folder_no));
            return $query->row_array();
            }




      // public function get_entry($folder_no = FALSE,$limit = FALSE, $offset = FALSE){ 
      //   if($limit){
      //          $this->db->limit($limit, $offset);
      //        }   

      //       if($folder_no === FALSE){
      //            //$this->db->order_by('id', 'DESC');
      //            $query = $this->db->get('entries');
      //            return $query->result_array();
      //       }
            
      //        $query = $this->db->get_where('entries', array('folder_no' => $folder_no));
      //       return $query->row_array();
      //       }














//////////////////////////////////////////////////////////////////////////////////////
        public function create_entry(){
            $folder_no = url_title($this->input->post('folder_no'));

            $data = array(
                'case_no' =>$this->input->post('case_no'),
                // 'folder_no' => $this->input->entry('folder_no'),
                'folder_no' => $folder_no,
                'serial_no' =>$this->input->post('serial_no'),
                'department' =>$this->input->post('department'),
                'ward' =>$this->input->post('ward'),
                'first_name' =>$this->input->post('first_name'),
               
                'last_name' =>$this->input->post('last_name'),
                'date' =>$this->input->post('date'),
                'admission_date' =>$this->input->post('admission_date'),
                'discharge_date' =>$this->input->post('discharge_date'),
                'payment_date' =>$this->input->post('payment_date'),
                'amount_paid' =>$this->input->post('amount_paid'),
                'non_drug_bill' =>$this->input->post('non_drug_bill'),
                'drug_bill' =>$this->input->post('drug_bill'),
                'total' =>$this->input->post('total'),
                'incurred_by' =>$this->input->post('incurred_by'),
                'balance' =>$this->input->post('balance'),
                'due_date' =>$this->input->post('due_date'),
                'effective_from' =>$this->input->post('effective_from'),
                'declarant_name' =>$this->input->post('declarant_name'),
                'declarant_occupation' =>$this->input->post('declarant_occupation'), 
                'declarant_address' =>$this->input->post('declarant_address'),
                'declarant_date' =>$this->input->post('declarant_date'),
                'guarantor_name' =>$this->input->post('guarantor_name'),
                'guarantor_occupation' =>$this->input->post('guarantor_occupation'),
                'guarantor_address' =>$this->input->post('guarantor_address'), 
                'investigator_name' =>$this->input->post('investigator_name'), 
                'recommender_name' =>$this->input->post('recommender_name'), 
                'recommender_position' =>$this->input->post('recommender_position'), 
                'recommendation' =>$this->input->post('recommendation'), 
                'approval' =>$this->input->post('approval'), 
                'guarantor_date' =>$this->input->post('guarantor_date')

            );
            return $this->db->insert('entries',$data);
        }

        public function update_entry(){
          
            $folder_no = url_title($this->input->post('folder_no'));
			$data = array(
                //'id' =>$this->input->post('id'),
                'case_no' =>$this->input->post('case_no'),
                // 'folder_no' => $this->input->entry('folder_no'),
                'folder_no' => $folder_no,
                'serial_no' =>$this->input->post('serial_no'),
                'department' =>$this->input->post('department'),
                'ward' =>$this->input->post('ward'),
                'first_name' =>$this->input->post('first_name'),
               
                'last_name' =>$this->input->post('last_name'),
                'date' =>$this->input->post('date'),
                'admission_date' =>$this->input->post('admission_date'),
                'discharge_date' =>$this->input->post('discharge_date'),
                'payment_date' =>$this->input->post('payment_date'),
                'amount_paid' =>$this->input->post('amount_paid'),
                'non_drug_bill' =>$this->input->post('non_drug_bill'),
                'drug_bill' =>$this->input->post('drug_bill'),
                'total' =>$this->input->post('total'),
                'incurred_by' =>$this->input->post('incurred_by'),
                'balance' =>$this->input->post('balance'),
                'due_date' =>$this->input->post('due_date'),
                'effective_from' =>$this->input->post('effective_from'),
                'declarant_name' =>$this->input->post('declarant_name'),
                'declarant_occupation' =>$this->input->post('declarant_occupation'), 
                'declarant_address' =>$this->input->post('declarant_address'),
                'declarant_date' =>$this->input->post('declarant_date'),
                'guarantor_name' =>$this->input->post('guarantor_name'),
                'guarantor_occupation' =>$this->input->post('guarantor_occupation'),
                'guarantor_address' =>$this->input->post('guarantor_address'), 
                'investigator_name' =>$this->input->post('investigator_name'), 
                'recommender_name' =>$this->input->post('recommender_name'), 
                'recommender_position' =>$this->input->post('recommender_position'), 
                'recommendation' =>$this->input->post('recommendation'), 
                
                'guarantor_date' =>$this->input->post('guarantor_date')

			);
           // $this->load->database();
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('entries', $data);
        }
        
        public function approval(){
             $folder_no = url_title($this->input->post('folder_no'));
              $data = array(
            // 'folder_no' => $folder_no,
             'approval' =>$this->input->post('approval')

         );
             
            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('entries', $data);
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




            