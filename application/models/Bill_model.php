<?php
class Bill_model extends CI_Model
{

    public function __construct(){
            $this->load->database();
        }
  
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



        public function get_bill($folder_no = FALSE){    
            if($folder_no === FALSE){
                //$this->db->order_by('id', 'DESC');
                $query = $this->db->get('');
                return $query->result_array();
            }
            
            $query = $this->db->get_where('', array('folder_no' => $folder_no));
            return $query->row_array();
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
               
                'drug_bill' =>$this->input->post('drug_bill'),'service_bill' =>$this->input->post('service_bill'),
                'total' =>$this->input->post('total'),
                'balance' =>$this->input->post('balance'),
                'receipt_no' =>$this->input->post('reciept_no'),
                'total_payment' =>$this->input->post('total_payment'),
                'sw_name' =>$this->input->post('sw_name'),
                'sw_date' =>$this->input->post('sw_date'), 
                'accountant_name' =>$this->input->post('accountant_name'),
                'acc_date' =>$this->input->post('acc_date'),
                'remarks' =>$this->input->post('remarks'),
               
                
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

