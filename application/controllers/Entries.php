<?php
    class Entries  extends CI_Controller{
/*
        function __construct() {
            parent::__construct();
        
            
            }
*/
        public function index(){
        
           /* $data['title'] = ucfirst($page);*/

        
            
        }

        public function view_entry(){
            //check login status
            if(!$this->session->userdata('logged_in')){
                $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Please Login to view this page.</div>');
                redirect('users/login');
            }
            //$data['entries'] = $this->entry_model->get_entry();
           $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
        $this->load->view('entries/view_entry'/*,$data*/);
          $this->load->view('templates/footer');
        }
      
        public function view_detail($folder_no = NULL){
            if(!$this->session->userdata('logged_in')){
                $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Please Login to view this page.</div>');
                redirect('users/login');
            }
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
            if(!$this->session->userdata('logged_in')){
                $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Please Login to view this page.</div>');
                redirect('users/login');
            }
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
            }
            
        }

        public function edit($folder_no ){
            if(!$this->session->userdata('logged_in')){
                $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Please Login to view this page.</div>');
                redirect('users/login');
            }
            $data['entry'] = $this->entry_model->get_entry($folder_no);
          

            if(empty($data['entry'])){
                show_404();
            }

            #$data['case_no'] = $data['first_name']['last_name'];
           

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entries/edit_view',$data);
            $this->load->view('templates/footer');
        }

		public function update(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->entry_model->update_entry();
			// Set message
			$this->session->set_flashdata('entry_updated', 'Your entry has been updated');
			redirect('entries');
        }
        
        public function dashboard(){
            //check login status
            if(!$this->session->userdata('logged_in')){
                $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Please Login to view this page.</div>');
                redirect('users/login');
            }
            $data['entries'] = $this->entry_model->get_dashboard();
           // $this->load->view('templates/header');
            //$this->load->view('templates/sidebar');
            $this->load->view('entries/exec_dashboard',$data);
            $this->load->view('templates/footer');
        }
    
    }   
