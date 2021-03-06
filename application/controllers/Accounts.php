<?php
class Accounts extends CI_Controller {
public function register_account() {
		$this->form_validation->set_rules('Username', 'Username', 'required|min_length[5]');
		$this->form_validation->set_rules('Password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('repeat_password', 'Repeat Password', 'required|matches[Password]');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger"> '.validation_errors() . '</div>');
			redirect(base_url('accounts'));
		}else {
			//$this->load->model('database');
			$this->load->model('accounts_model');
			//$date_created = $this->input->post();
			$username = $this->input->post('Username');
			$password = $this->input->post('Password');
			$account_type = $this->input->post('account_type');
			$created_by = 'admin';
			$exec = $this->accounts_model->insert_account($username,$password,$account_type/*,$date_created*/,$created_by);
			if ($exec) {
				$this->session->set_flashdata('successMessage', '<div class="alert alert-success">Account Created Successfully</div>');
				redirect(base_url('accounts'));
			}else {
				$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Opps... Something Went Wrong Please Try Again.</div>' );
			}

		}
	}
	
	/*check username exists
	function check_username_exists($username){
		$this->form_validation->set_message('check_username_exists', 'That username is already taken. Please choose a different one.');
		if($this->accounts_model->check_username_exists($username)){
			return true;

		}else{
					return false;
		}
	}*/

    public function delete($id){
		$this->load->model('accounts_model');
		$exec = $this->accounts_model->delete_account($id);
		if ($exec) {
			$this->session->set_flashdata('successMessage', '<div class="alert alert-success">Account Deleted Successsfully</div>');
			redirect(base_url('accounts'));
		}else {
			$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Opps... Something Went Wrong Please Try Again.</div>' );
		}
}
}