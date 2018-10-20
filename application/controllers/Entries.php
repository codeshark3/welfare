<?php
    class Entries  extends CI_Controller{

        function __construct() {
            parent::__construct();
        
            
            }

        public function index(){
            
           /* $data['title'] = ucfirst($page);*/

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
        $this->load->view('entries/new_entry_view'/*,$data*/);
            $this->load->view('templates/footer');
            
        }
    }   