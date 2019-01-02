<?php
class Print_model extends CI_Model{


      public function get_entry($folder_no = FALSE ){ 
       // $this->db->where('folder_no', $folder_no);
		$data = $this->db->get_where('entries', array('folder_no' => $folder_no));
  $output = '<table width="100%" cellspacing="5" cellpadding="5">';
   foreach($data->result() as $row)
  {
   $output .= '
   <tr>
    
    <td width="100%">
     <p><b>Name : </b>'.$row->first_name.'</p>
     <p><b>Address : </b>'.$last_name.'</p>
     <p><b>City : </b>'.$row->folder_no.'</p>
     <p><b>Postal Code : </b>'.$row->serial_no.'</p>
     <p><b>Country : </b> '.$row->case_no.' </p>
    </td>
   </tr>
   ';
  }
  // $output .= '
  // <tr>
  //  <td colspan="2" align="center"><a href="'.base_url().'htmltopdf" class="btn btn-primary">Back</a></td>
  // </tr>
  // ';
  $output .= '</table>';
  return $output;
 }
}
 