<?php
    class Pages extends CI_Controller{

        function __construct() {
            parent::__construct();
            
            // Load url helper
            
            }

        public function view($page ='home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                  show_404();  
            }
            //$data['title'] = ucfirst($page);

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/footer');
            
        }


        public function accounts () {
            $data['page'] = 'accounts';
            $this->load->model('accounts_model');
            $data['accountsList'] = $this->accounts_model->display_accounts();
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('pages/accounts_view',$data);
            $this->load->view('templates/footer');
        }
    
    }   