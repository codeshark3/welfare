<?php 
Class Reports extends CI_Controller{

       public function __construct() {
            parent::__construct();
//             if (!$this->session->userdata('account_type') ) {
//        //      
//    redirect(base_url('login'));
     
// }
 $this->load->model('reports_model');
 
 }    


    public function view_reports(){

  $data['report'] = $this->reports_model->get_report(FALSE);
         $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
       
        $this->load->view('reports/report_view');
        
          $this->load->view('templates/footer');
        
          
       }  
// public function fetch()
//  {
//   $output = '';
//   $query = '';
//   $this->load->model('reports_model');
//   if($this->input->post('query'))
//   {
//    $query = $this->input->post('query');
//   }
//   $data = $this->reports_model->fetch_data($query);
//   //print_r($data);

  
//  $output .= '
//   <div class="table-responsive">
//      <table class="table table-bordered table-striped table-sm">
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
//       <td><a class="btn btn-success" href="entries/'.$row->folder_no.'">Details</a></td>
         

//       </tr>
//     ';
    
//    }
//   }
//   else
//   {
//    $output .= '<tr>
//        <td colspan="5">No Data Found</td>
//       </tr>';
//   }
//   $output .= '</table>';
//   echo $output;
//  }

        public function fetch(){  
         
           $fetch_data = $this->reports_model->make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] =  $row->last_name; 
                $sub_array[] = $row->first_name;  
                $sub_array[] = $row->folder_no;
                $sub_array[] = $row->case_no;  
                $sub_array[] = $row->serial_no;
                $sub_array[] = $row->total;
                $sub_array[] = $row->approval;

                $sub_array[] = '<a  class="btn btn-primary btn-xs" name="update" type="button" id="'.$row->id.'" href="entries/edit/'.$row->folder_no.'">Update</a>';  
                $sub_array[] = '<a type="button" class="btn btn-success btn-xs" name="delete" href="entries/'.$row->folder_no.'" id="'.$row->id.'" >Details</a>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->reports_model->get_all_data(),  
                "recordsFiltered"     =>     $this->reports_model->get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output);  
      }  
}














//     public function view_reports(){
// $data['report'] = $this->reports_model->get_report(FALSE);
  
//        //     $this->load->view('templates/header');
//        // $this->load->view('templates/sidebar');
//          if(empty($data['report'])){
//                 //show_404();
//          	echo "efeeewgewg";
//             }   
//         $this->load->view('reports/report_view',$data);
        
//           // $this->load->view('templates/footer');
        
          
//         }  