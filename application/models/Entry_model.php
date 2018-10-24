<?php
    class Entry_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
  

        public function get_entry($folder_no = FALSE){    
            if($folder_no === FALSE){
                $query = $this->db->get('entries');
                return $query->result_array();
            }
            
            $query = $this->db->get_where('entries', array('folder_no' => $folder_no));
            return $query->row_array();
            }
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
                'guarantor_date' =>$this->input->post('guarantor_date')

            );
            return $this->db->insert('entries',$data);
        }
  }