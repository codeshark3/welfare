<?php
class Dashboard extends CI_Controller {

    public function dashboard(){
        //check login status
        if(!$this->session->userdata('logged_in')){
            $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Please Login to view this page.</div>');
            redirect('users/login');
        }
        $data['entries'] = $this->entry_model->get_dashboard();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard',$data);
        $this->load->view('templates/footer');
    }


















}