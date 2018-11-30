<?php
    class Bill  extends CI_Controller{

       public  function __construct() {
            parent::__construct();
         
            if (!$this->session->userdata('account_type') ) {
       //      
                redirect(base_url('login'));
     
}
 } 
            
            

        public function index(){
        
           /* $data['title'] = ucfirst($page);*/
       $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            
        $this->load->view('bill/new_bill'/*,$data*/);
        
          $this->load->view('templates/footer');
        
        
            
        }

        public function bill_fetch()
        {
         $output = '';
         $query = '';
         $this->load->model('bill_model');
         if($this->input->post('query'))
         {
          $query = $this->input->post('query');
         }
         $data = $this->bill_model->fetch_data($query);
         //print_r($data);
       
         
        $output .= '
         <div class="table-responsive">
            <table class="table table-bordered table-striped">
             <tr>
             <th>id</th>
             <th>Patient Name</th>
             <th>Folder Number</th>
             <th>Submission Date</th>
             <th>total</th>
             
             <th>Reciept Number</th>
             <th>Total</th>
             <th>Total Payment</th>
             <th>Edit</th> 
             <th>Details</th>
             </tr>
         ';
         if($data->num_rows() > 0)
         {
          foreach($data->result() as $row)
          {
           $output .= '
             <tr>
              <td>'.$row->bill_id.'</td>
              <td>'.$row->patient_name.'</td>
              <td>'.$row->folder_no.'</td>
              <td>'.$row->sub_date.'</td>
              <td>'.$row->total.'</td>
              
              <td>'.$row->receipt_no.'</td>
              <td>'.$row->total.'</td>
              <td>'.$row->total_payment.'</td> 
              <td><a class="btn btn-primary" href="entries/edit/'.$row->folder_no.'">Edit</a></td>
               <td><a class="btn btn-success" href="entries/'.$row->folder_no.'">Details</a></td>
               
             </tr>
           ';
           
          }
         }
         else
         {
          $output .= '<tr>
              <td colspan="5">No Data Found</td>
             </tr>';
         }
         $output .= '</table>';
         echo $output;
        }
        
      




        public function view_bill(){
            //check login status
           
            //$data['entries'] = $this->entry_model->get_entry();
           $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            
        $this->load->view('bill/view_bill'/*,$data*/);
        
          $this->load->view('templates/footer');
        }
      
        public function view_detail($folder_no = NULL){
            
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

        public function create_bill(){
          
            //form validation rules
       
            $this->form_validation->set_rules('patient_name', 'Patient Name', 'required');
            $this->form_validation->set_rules('folder_no','Folder Number','required');
            $this->form_validation->set_rules('entry_date',' Entry Date','required');
            $this->form_validation->set_rules('sub_date','Submission Date','required');
            $this->form_validation->set_rules('drug_bill','Drug Bill','required');
            $this->form_validation->set_rules('service_bill','Service_bill','required');  
            $this->form_validation->set_rules('total','Total Bill Payable','required');
            $this->form_validation->set_rules('payment','Payment ','required');
           
        
            $this->form_validation->set_rules('balance','Balance','required'); 
           
         
            $this->form_validation->set_rules('reciept_no','Reciept Number','required');  
            $this->form_validation->set_rules('total_payment','Total Payment','required'); 
            
            $this->form_validation->set_rules('sw_name','Social Worker Name','required');
            $this->form_validation->set_rules('sw_date','Social Worker Date','required'); 
            $this->form_validation->set_rules('accountant_name','Accountant Name','required'); 
            $this->form_validation->set_rules('acc_date','Accountant Date','required'); 
            
            $this->form_validation->set_rules('remarks','Remarks','max_length[100]');
            //$this->form_validation->set_rules('guarantor_date','guarantor_date','required');
            
            if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('bill/new_bill'/*,$data*/);
            $this->load->view('templates/footer');
             $this->session->set_flashdata('entry_error','is required please fill');
            } else {
                $this->load->model('Bill_model');
                $this->Bill_model->create();
                redirect('tracking/view'); 
                   $this->session->set_flashdata('bill_entered','New entry created');
            }
            
        }

        public function edit_bill($folder_no ){
         
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
		
			$this->entry_model->update_bill();
			// Set message
			$this->session->set_flashdata('entry_updated', 'Your entry has been updated');
			redirect('entries');
        }
        
        public function dashboard(){
            //check login status
            
            $data['entries'] = $this->entry_model->get_dashboard();
           // $this->load->view('templates/header');
            //$this->load->view('templates/sidebar');
            $this->load->view('entries/exec_dashboard',$data);
            $this->load->view('templates/footer');
        }
    

      public function bill_edit($folder_no ){
          
            $data['entry'] = $this->entry_model->get_entry($folder_no);
          

            if(empty($data['entry'])){
                show_404();
            }     

            #$data['case_no'] = $data['first_name']['last_name'];
           

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('bill/bill_edit',$data);
            $this->load->view('templates/footer');
        }
      

}