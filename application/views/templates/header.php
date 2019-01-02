<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Welfare</title>

    <!-- Bootstrap core CSS -->

 
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/dashboard.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/style.css">
<!-- link rel="stylesheet" type="text/css" href="<?//php echo base_url(); ?>static/css/signin.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.4/b-html5-1.5.4/b-print-1.5.4/sc-1.5.0/datatables.min.css"/>
<!--
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="</?php echo base_url(); ?>static/js/jquery-3.3.1.slim.min.js"><script>
--> 
   <!-- Custom styles for this template -->
    
  </head>

  <body>
   
  
   <nav class="navbar navbar-expand-lg navbar-dark primary-color" >
     <!-- <div class="float-left">
          <a href="#" data-activates="slide-out" class="button-collapse">
              <i class="fa fa-bars"></i>
          </a>
      </div> -->
      <a class="navbar-brand col-sm-3 col-md-2 mr-0  mx-auto" href="<?php echo base_url(); ?>login" style="  color: #fff; font-size: 30px"><b>KBTH- SOCIAL WELFARE SYSTEM</b></a>
<ul class="nav navbar-nav nav-flex-icons ml-auto">
    <li class="nav-item">   
          <?php if($this->session->userdata('account_type')) : ?> 
        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">
            <i class="fa fa-envelope"></i>
            <span class="clearfix d-none d-sm-inline-block"><strong>Sign Out</strong></span>

          
        </a> 
      <?php endif; ?>
    </li>
    
    
</ul>

</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          

  
  <?php if ($this->session->flashdata('logged_in')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('logged_in').$this->session->userdata['username'].'</div>'; ?>
    
  <?php endif; ?>
   <?php if ($this->session->flashdata('logged_out')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('logged_out').'</div>'; ?>
    
  <?php endif; ?>
  <?php if ($this->session->flashdata('entry_created')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('entry_created').'</div>'; ?>
    
  <?php endif;  ?>
   <?php if ($this->session->flashdata('bill_entered')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('bill_entered').'</div>'; ?>
    
  <?php endif; ?>
   <?php if ($this->session->flashdata('entry_error')): ?>

      <?php echo '<div class="alert alert-danger" >'.$this->session->flashdata('entry_error').'</div>'; ?>
    
  <?php endif; ?>
   <?php if ($this->session->flashdata('errorMessage')): ?>

      <?php echo '<div class="alert alert-danger" >'.$this->session->flashdata('entry_error').'</div>'; ?>
    
  <?php endif; ?>
 <?php if ($this->session->flashdata('entry_updated')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('entry_updated').'</div>'; ?>
    
  <?php endif; ?>
<?php if ($this->session->flashdata('approved')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('approved').'</div>'; ?>
    
  <?php endif; ?> 





















<!-- 
  <!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Welfare</title>

    <!- Bootstrap core CSS -->

 
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
<!-- <link rel="stylesheet" type="text/css" href="<//?php echo base_url(); ?>static/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?//php echo base_url(); ?>static/css/mdb.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="</?php echo base_url(); ?>static/css/dashboard.css"> -->
<!-- link rel="stylesheet" type="text/css" href="<?//php echo base_url(); ?>static/css/signin.css"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
<link rel="stylesheet" type="text/css" href="<?//php echo base_url(); ?>static/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?//php echo base_url(); ?>static/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?//php echo base_url(); ?>static/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> -->
<!--
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="</?php echo base_url(); ?>static/js/jquery-3.3.1.slim.min.js"><script>
--> 
   <!-- Custom styles for this template -->
    
 <!--  </head>

  <body>
   
  
      <nav class="navbar navbar-custom fixed-top navbar-expand-lg navbar-default flex-md-nowrap p-0 shadow" style="background-color: #50ec57 ;">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?//php echo base_url(); ?>login" style="color: #fff"><strong>KBTH- SOCIAL WELFARE SYSTEM</strong></a>
         
      <ul class="navbar-nav px-3 ">
        <li class="nav-item text-nowrap">
         <?//php if($this->session->userdata('account_type')) : ?>  
          <a class="nav-link" href="<?//php echo base_url(); ?>users/logout" style="color: #fff"><strong>Sign out</strong></a>
           <?//php endif; ?>
        </li>
      </ul>

     
    </nav>
 -->
          
<!--<div class="container-fluid mx-auto"  style="margin-top:60px; margin-left:60px; margin-bottom:0;">-->
  

<!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <//?php if ($this->session->flashdata('logged_in')): ?>

      <?//php echo '<div class="alert alert-success" >'.$this->session->flashdata('logged_in').$this->session->userdata['username'].'</div>'; ?>
    
  <//?php endif; ?>
   <//?php if ($this->session->flashdata('logged_out')): ?>

      <?//php echo '<div class="alert alert-success" >'.$this->session->flashdata('logged_out').'</div>'; ?>
    
  <?//php endif; ?>
  <?//php if ($this->session->flashdata('entry_created')): ?>

      <?//php echo '<div class="alert alert-success" >'.$this->session->flashdata('entry_created').'</div>'; ?>
    
  <?//php endif;  ?>
   <?//php if ($this->session->flashdata('bill_entered')): ?>

      <?//php echo '<div class="alert alert-success" >'.$this->session->flashdata('bill_entered').'</div>'; ?>
    
  <?//php endif; ?>
   <?//php if ($this->session->flashdata('entry_error')): ?>

      <?//php echo '<div class="alert alert-danger" >'.$this->session->flashdata('entry_error').'</div>'; ?>
    
  <?//php endif; ?>
 <?//php if ($this->session->flashdata('entry_updated')): ?>

      <?//php echo '<div class="alert alert-success" >'.$this->session->flashdata('entry_updated').'</div>'; ?>
    
  <?//php endif; ?>
<?//php if ($this->session->flashdata('approved')): ?>

      <?//php echo '<div class="alert alert-success" >'.$this->session->flashdata('approved').'</div>'; ?>
    
  <?//php endif; ?> -->

<!-- <ul class="nav navbar-nav nav-flex-icons ml-auto">
    <li class="nav-item">
        <a class="nav-link">
            <i class="fa fa-envelope"></i>
            <span class="clearfix d-none d-sm-inline-block">Contact</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link">
            <i class="fa fa-gear"></i>
            <span class="clearfix d-none d-sm-inline-block">Settings</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i>
            <span class="clearfix d-none d-sm-inline-block">Account</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
</ul> -->
