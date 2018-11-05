<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {

 function index()
 {
    //$this->load->view('templates/header');
   // $this->load->view('templates/sidebar');
    $this->load->view('search/ajaxsearch');
    //$this->load->view('templates/footer');
 }

 public function fetch()
 {
  $output = '';
  $query = '';
  $this->load->model('ajaxsearch_model');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->ajaxsearch_model->fetch_data($query);
  //print_r($data);

  
 $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
      <th>id</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Case Number</th>
      <th>Folder Number</th>
      <th>Serial Number</th>
      <th>Amount Owed</th>
      <th>Approval</th>
      <th>Approval</th> 
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->id.'</td>
       <td>'.$row->last_name.'</td>
       <td>'.$row->first_name.'</td>
       <td>'.$row->case_no.'</td>
       <td>'.$row->folder_no.'</td>
       <td>'.$row->serial_no.'</td>
       <td>'.$row->total.'</td>
       <td>'.$row->approval.'</td>
       
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
 
}