<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Printpdf extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function index()
  {
    $this->load->library('pdfgenerator');
		$data['users']=array(
			array('firstname'=>'I am','lastname'=>'Programmer','email'=>'iam@programmer.com'),
			array('firstname'=>'I am','lastname'=>'Designer','email'=>'iam@designer.com'),
			array('firstname'=>'I am','lastname'=>'User','email'=>'iam@user.com'),
			array('firstname'=>'I am','lastname'=>'Quality Assurance','email'=>'iam@qualityassurance.com')
		);
    $html = $this->load->view('reports/table_report', $data, true);
    $filename = 'report_'.time();
    $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
  }
}

// <!-- <?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// class Printpdf extends CI_Controller {
 // public function __construct()
 // {
 //  parent::__construct();
 //  $this->load->model('print_model');
 //  $this->load->library('pdf');
 // }

  

 // public function my_print(){
 	 // $userdata = $this->session->userdata();
   //          $data['entry'] = $this->print_model->get_entry($folder_no);
          

   //          if(empty($data['entry'])){
   //              show_404();
   //          }

// if($this->uri->segment(3))
  // {
   // $folder_no = $this->uri->segment(3);
   // $html_content = '<h3 align="center">Convert HTML to PDF in CodeIgniter using Dompdf</h3>';
   // $html_content .= $this->print_model->get_entry($folder_no);
   // $this->pdf->loadHtml($html_content);
   // $this->pdf->render();
   // $this->pdf->stream("".$folder_no.".pdf", array("Attachment"=>0));
  // }

  

 // }
// }

 


