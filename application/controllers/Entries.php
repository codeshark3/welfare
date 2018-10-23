<?php
    class Entries  extends CI_Controller{
/*
        function __construct() {
            parent::__construct();
        
            
            }
*/
        public function index(){
        
           /* $data['title'] = ucfirst($page);*/

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
        $this->load->view('entries/new_entry_view'/*,$data*/);
            $this->load->view('templates/footer');
            
        }

        public function view_entry(){
            $data['entries'] = $this->entry_model->get_entry();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entries/view_entry',$data);
            $this->load->view('templates/footer');
        }
        /*
        public function view_detail($folder_no = NULL){
            $data['entry'] = $this->entry_model->get_entry($folder_no);

            if(empty($folder_no['entry'])){
                show_404();
            }

            $data['case_no'] = $data['first_name']['last_name'];

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entries/details',$data);
            $this->load->view('templates/footer');
        }
*/
    }   
