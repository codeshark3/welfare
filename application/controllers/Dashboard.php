<?php
class Dashboard extends CI_Controller {

    public function __construct() {
            parent::__construct();
            if (!$this->session->userdata('account_type') ) {
       //      
   redirect(base_url('login'));
     
}
$this->load->model("dashboard_model"); 
 } 

    public function view_dashboard(){
        //check login status
        // if(!$this->session->userdata('logged_in')){
        //     $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Please Login to view this page.</div>');
        //     redirect('users/login');
        // } 
        //  if(!$this->session->userdata('account_type') == "Executive") {
        //      $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">You do not have the right credentials to view this page.</div>');
        //     redirect('users/login');

 //}
        //$data['entries'] = $this->entry_model->get_dashboard();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/view_dashboard');
        $this->load->view('templates/footer');
   

    }


 public function fetch(){  
          // $this->load->model("entry_model");  
           $fetch_data = $this->dashboard_model->make_datatables();  
           $data = array();  
           $no = $_POST['start'];
           foreach($fetch_data as $row)  
           {  
            $no++;
                $sub_array = array();  
                $sub_array[] = $no;
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
                "recordsTotal"          =>      $this->dashboard_model->get_all_data(),  
                "recordsFiltered"     =>     $this->dashboard_model->get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output);  
      }  
//     public function fetch()
//  {
//   $output = '';
//   $query = '';
//   $this->load->model('dashboard_model');
//   if($this->input->post('query'))
//   {
//    $query = $this->input->post('query');
//   }
//   $data = $this->dashboard_model->fetch_data($query);
//   //print_r($data);

  
//  $output .= '
//   <div class="table-responsive">
//      <table class="table table-bordered table-striped">
//       <tr>
//       <th>id</th>
//       <th>Last Name</th>
//       <th>First Name</th>
//       <th>Case Number</th>
//       <th>Folder Number</th>
//       <th>Serial Number</th>
//       <th>Amount Owed</th>
//       <th>Approval</th>
     
//       <th>Edit</th> 
//       <th>Details</th>
    
//       </tr>
//   ';
//   if($data->num_rows() > 0)
//   {
//    foreach($data->result() as $row)
//    {
//     $output .= '
//       <tr>
//        <td>'.$row->id.'</td>
//        <td>'.$row->last_name.'</td>
//        <td>'.$row->first_name.'</td>
//        <td>'.$row->case_no.'</td>
//        <td>'.$row->folder_no.'</td>
//        <td>'.$row->serial_no.'</td>
//        <td>'.$row->total.'</td>
//        <td>'.$row->approval.'</td> 
//        <td><a class="btn btn-primary" href="entries/edit/'.$row->folder_no.'">Edit</a></td>
//         <td><a class="btn btn-success" href="entries/'.$row->folder_no.'">Details</a></td>
      
//     ';
    
//    }
   
//  }
//  else
//   {
//    $output .= '<tr>
//        <td colspan="5">No Data Found</td>
//       </tr>';
//   }
//   $output .= '</table>';
//   echo $output;
//  // }  <td> <a class="btn btn-primary"  href="<?php echo site_url('/entries/update_approval/''.row->folder_no.'); ?/> '" type="submit" >Submit</a></td>
//   //      </tr>
// }

}
