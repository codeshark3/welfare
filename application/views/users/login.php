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
<!-- <link rel="stylesheet" type="text/css" href="<?//php echo base_url(); ?>static/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?//php echo base_url(); ?>static/css/dashboard.css"> -->
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/signin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
<!-- <link rel="stylesheet" type="text/css" href="<?//php echo base_url(); ?>static/css/bootstrap-datepicker.min.css">
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
    
  </head>

  <body>
   
   <nav class="navbar navbar-expand-lg navbar-dark primary-color" >
    <!-- <div class="float-left">
           <a href="#" data-activates="slide-out" class="button-collapse">
              <i class="fa fa-bars"></i>
          </a> 
      </div>-->
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo base_url(); ?>login" style="  color: #fff; font-size: 20px"><strong>KBTH- SOCIAL WELFARE SYSTEM</strong></a>
     <!--  <div class="  mr-auto " style="color: #fff; font-size: 20px">
        <p><strong>KORLE-BU TEACHING HOSPITAL-WELFARE SYSTEM</strong></p>
    </div> -->
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

</nav><!-- #50ec57 -->
  

  


 <?php if ($this->session->flashdata('invalid')): ?>

      <?php echo '<div class="alert alert-danger" >'.$this->session->flashdata('invalid').'</div>'; ?>
    
  <?php endif; ?>
<div class="wrapper fadeInDown" >
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>static/img/kblogo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
     <?php echo form_open('users/login_validation','class="form-signin"'); ?>
     <!--  <input type="text" id="login" class="fadeIn second" name="login" placeholder="login"> -->
      
       <input type="text" class="fadeIn second" id="login" name="username" placeholder="Username" required autofocus  />


    <!--    <input type="password" class="fadeIn third"  name="password" placeholder="Password"  /> --> 
      <input type="password"  class="fadeIn third" name="password" id="login" placeholder="password" required autofocus>
      <input type="submit" class="fadeIn fourth" value="Log In">

   <?php echo form_close(); ?>  

    <!-- Remind Passowrd -->
  <!--   <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>


</body>
</html>