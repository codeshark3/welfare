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
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/dashboard.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/signin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
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
   
  
      <nav class="navbar navbar-custom  fixed-top  flex-md-nowrap p-0 shadow">
     <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo base_url(); ?>login" style="color: #fff"><strong>KBTH- SOCIAL WELFARE SYSTEM</strong></a>
         
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
         <?php if($this->session->userdata('account_type')) : ?>  
          <a class="nav-link" href="<?php echo base_url(); ?>users/logout"  style="color: #fff"><strong>Sign out</strong></a>
           <?php endif; ?>
        </li>
      </ul>

     
    </nav>

          
<!--<div class="container-fluid mx-auto"  style="margin-top:60px; margin-left:60px; margin-bottom:0;">-->

  


<div class = "container mx-auto">
	<div class="wrapper">
        <?php echo form_open('users/login_validation','class="form-signin"'); ?>
      
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
              <hr class="colorgraph"><br>
              <div class="form-group ">
              <label>Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username" required autofocus  />
              </div>
                <div class="form-group">
              <label>Password</label>
			  <input type="password" class="form-control" name="password" placeholder="Password" required autofocus />     		  
            </div>
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
              <?php echo form_close(); ?>		
	</div>
</div>



</body>
</html>