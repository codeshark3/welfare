<?php
    class Entries  extends CI_Controller{

       public function __construct() {
            parent::__construct();
            if (!$this->session->userdata('account_type') ) {
       //      
   redirect(base_url('login'));
     
}
 $this->load->model('entry_model');
 
 }      
  // public function index(){
        
  //           $data['title'] = ucfirst($page);

        
            
  //       }

        public function view_entry(){

   $data['entries'] = $this->entry_model->get_entry(FALSE);
           $this->load->view('templates/header');
       $this->load->view('templates/sidebar');
            
        $this->load->view('entries/view_entry'/*,$data*/);
        
          $this->load->view('templates/footer');
        
          
        }

 public function fetch(){  
          // $this->load->model("entry_model");  
           $fetch_data = $this->entry_model->make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] =  $row->last_name; 
                $sub_array[] = $row->first_name;  
                $sub_array[] = $row->folder_no;
                $sub_array[] = $row->case_no;  
                $sub_array[] = $row->serial_no;
                $sub_array[] = $row->total;
                $sub_array[] = $row->approval;

                $sub_array[] = '<a  class="btn btn-primary btn-sm m-0" name="update" type="button" id="'.$row->id.'" href="entries/edit/'.$row->folder_no.'">Update</a>';  
                $sub_array[] = '<a type="button" class="btn btn-default  btn-sm m-0" name="delete" href="entries/'.$row->folder_no.'" id="'.$row->id.'" >Details</a>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->entry_model->get_all_data(),  
                "recordsFiltered"     =>     $this->entry_model->get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output);  
      }  


  // public function view_entry($offset = 0){
   
  //           // Pagination Config    
  //           $config['base_url'] = base_url() . 'entries/';
  //           $config['total_rows'] = $this->db->count_all('entries');
  //           $config['per_page'] = 1;
  //           $config['uri_segment'] = 2;
  //           $config['attributes'] = array('class' => 'pagination-link');

  //           // Init Pagination
  //           $this->pagination->initialize($config);

  //  $data['entries'] = $this->entry_model->get_entry(FALSE, $config['per_page'],$offset);
  //          $this->load->view('templates/header');
  //           $this->load->view('templates/sidebar');
            
  //       $this->load->view('entries/view_entry'/*,$data*/);
        
  //         $this->load->view('templates/footer');
        
          
  //       }








  //     ///////////////////////////////////////////////////////////////
        public function view_detail($folder_no = NULL){
            
          $userdata = $this->session->userdata();
            $data['entry'] = $this->entry_model->get_entry($folder_no);
          

            if(empty($data['entry'])){
                show_404();
            }

            #$data['case_no'] = $data['first_name']['last_name'];
           

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entries/details',$data);
            $this->load->view('templates/footer');
        }


        public function create(){
           
           //form validation rules
       
            $this->form_validation->set_rules('case_no', 'Case Number', 'required');
            $this->form_validation->set_rules('folder_no','Folder Number','required');
            $this->form_validation->set_rules('serial_no','Serial Number','required');
            $this->form_validation->set_rules('department','Department','required');
            $this->form_validation->set_rules('ward','Ward','required');
            $this->form_validation->set_rules('first_name','First Name','required');
            $this->form_validation->set_rules('last_name','Last Name','required');
            $this->form_validation->set_rules('date','Date','required');
            $this->form_validation->set_rules('admission_date','Admission Date','required');
            $this->form_validation->set_rules('discharge_date','Dischare Date','required');
            $this->form_validation->set_rules('payment_date','Payment Date','required');
            $this->form_validation->set_rules('amount_paid','Amount Paid','required');
            $this->form_validation->set_rules('non_drug_bill','Non Drug Bill','required');
            $this->form_validation->set_rules('drug_bill','Drug Bill','required');
            $this->form_validation->set_rules('total','Total','required');
            $this->form_validation->set_rules('incurred_by','Incurred By','required');  
            $this->form_validation->set_rules('balance','Balance','required'); 
            $this->form_validation->set_rules('due_date','Due Date','required');  
            $this->form_validation->set_rules('effective_from','Effective from','required'); 
            $this->form_validation->set_rules('declarant_name','Declarant Name','required');
            $this->form_validation->set_rules('declarant_occupation','Declarant Occupation','required');
            $this->form_validation->set_rules('declarant_address','Declarant Address','required'); 
            $this->form_validation->set_rules('declarant_date','Declarant Date','required'); 
            $this->form_validation->set_rules('guarantor_name','Guarantor Name','required'); 
             $this->form_validation->set_rules('guarantor_occupation','Guarantor Occupation','required');
            $this->form_validation->set_rules('guarantor_address','Guarantor Address','required');
            $this->form_validation->set_rules('investigator_name','Investigator','required');
            $this->form_validation->set_rules('recommender_name','Recommender','required');
            $this->form_validation->set_rules('recommender_position','Recommender Position','required');
            $this->form_validation->set_rules('recommendation','Recommendation','required');
            $this->form_validation->set_rules('approval','Approval','required');
            //$this->form_validation->set_rules('guarantor_date','guarantor_date','required');
            
            if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entries/new_entry_view'/*,$data*/);
            $this->load->view('templates/footer');
            } else {
                $this->entry_model->create_entry();
                redirect('entries'); 
                  $this->session->set_flashdata('entry_created','New Entry Created Successfully ');
            }
            
        }

        public function edit($folder_no){
        
            $data['entry'] = $this->entry_model->get_entry($folder_no);
          

            if(empty($data['entry'])){
                show_404();
            }

           // $data['case_no'] = $data['first_name']['last_name'];
           

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entries/edit_view',$data);
            $this->load->view('templates/footer');
        }

		public function update(){
		
			 $this->entry_model->update_entry();
			// Set message
			$this->session->set_flashdata('entry_updated', 'Your entry has been updated');
			redirect('entries');
        }

        public function approval(){
            $this->entry_model->approval();
            // Set message
            $this->session->set_flashdata('approved', 'Approval status has been updated');
            redirect('dashboard');
        }
        
        public function dashboard(){
            //check login status
            
            $data['entries'] = $this->entry_model->get_dashboard();
           // $this->load->view('templates/header');
            //$this->load->view('templates/sidebar');
            $this->load->view('entries/exec_dashboard',$data);
            $this->load->view('templates/footer');
        }
    
    }   




      