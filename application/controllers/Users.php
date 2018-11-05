<?php 
    class Users extends CI_Controller{
        public function login(){
           // $data['title'] = "Login";
        //$this->load->view('templates/header'/*,$data*/);
            $this->load->view('users/login');
            $this->load->view('templates/footer');

        }
        public function login_validation(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->form_validation->set_rules('username','Username', 'required');
            $this->form_validation->set_rules('password','Password', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">' . validation_errors() . '</div>');
                redirect(base_url('login'));
            }else {
                $this->load->model('accounts_model');
                $verify_login = $this->accounts_model->login($username);
                if ($verify_login) {
                    $hash_password = $verify_login->password;
                    $hash = password_verify($password,$hash_password);
                    if ($hash) {
                        $userdata = array( 
                            'id' => "$verify_login->id",
                            'username' => "$verify_login->username",
                            'logged_in' => true,
                            'account_type' => "$verify_login->account_type"
                            );
                        $this->session->set_userdata($userdata);
                        $this->session->set_flashdata('successMessage','<div class="alert alert-success">Login Successfully, Welcome '.$this->session->userdata['username'].'</div>');
                        //use this to show and unshow approval button
                        if ($this->session->userdata('account_type') == "Admin") {
                            
                            redirect(base_url('accounts'));
                        }else if ($this->session->userdata('account_type') == "Executive") {
                            redirect(base_url('dashboard'));
                        }else if ($this->session->userdata('account_type') == "User") {
                            redirect(base_url('entries'));
                        }
                    }else {
                        $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Incorrect Login Name Or Password</div>');
                    redirect(base_url('login'));
                    }
                }else {
                    $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Incorrect Login Name Or Password</div>');
                    redirect(base_url('login'));
                }
            }
        }
        public function logout() {
            $data = array('id','username','logged_in','account_type');
            $this->session->unset_userdata($data);
            $this->session->set_flashdata('successMessage','<div class="alert alert-success">Logout Successfully</div>');
            redirect(base_url('login'));
        }

    }