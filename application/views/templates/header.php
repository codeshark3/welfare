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
  <!--  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="</?php echo base_url(); ?>static/css/signin.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="</?php echo base_url(); ?>static/css/bootstrap.min.css">-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/dashboard.css"><!--
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="</?php echo base_url(); ?>static/js/jquery-3.3.1.slim.min.js"><script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css"/>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
<link rel="stylesheet" type="text/css" href="</?php echo base_url(); ?>static/css/font-awesome.min.css">       
    Custom styles for this template -->
    
  </head>

  <body>
   
   <!--  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="padding"><nav class="navbar navbar-dark fixed-top navbar-expand-lg bg-dark " style="padding">-->
     
    <!--  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="</?php echo base_url(); ?>">Company name</a> <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
      
     <!-- <ul class="navbar-nav">
                <li class="nav-item dropdown text-nowrap">
                    <a class="nav-link dropdown-toggle" href="/account" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div> </li></ul> -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
            <?php if($this->session->userdata('logged_in')) : ?>      
           
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
        
      
          <li><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Sign out</a></li>
         
       
      </ul> <?php endif; ?>
         
          
        </div>
      </div>
    </nav>
           
            
           
         
                    
 
    </nav>

     <div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('successMessage')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('successMessage').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('errorMessage')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('errorMessage').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('entry_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('entry_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>
