<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Welfare</title>

    <!-- Bootstrap core CSS -->
  <!--  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/signin.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
<!--<link rel="stylesheet" type="text/css" href="<//?php echo base_url(); ?>static/css/dashboard.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css"/>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/font-awesome.min.css">       
    <!-- Custom styles for this template -->
    
  </head>

  <body>
    <!--<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="padding">-->
    <nav class="navbar navbar-dark fixed-top navbar-expand-lg bg-dark " style="padding">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo base_url(); ?>">Company name</a>
    <!--  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
      
     <!-- <ul class="navbar-nav">
                <li class="nav-item dropdown text-nowrap">
                    <a class="nav-link dropdown-toggle" href="/account" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div> </li></ul> -->
                   
            
           
         
                    
 <?php if($this->session->userdata('logged_in')) : ?>      
          <ul class="navbar-nav px-3 ml-auto">  
      
        <li class="nav-item text-nowrap">
      
          <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Sign out</a>
         
        </li>
      </ul> <?php endif; ?>
    </nav>

    <div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('success_message')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('success_message').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('logged_in')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('logged_in').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('entry_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('entry_updated').'</p>'; ?>
      <?php endif; ?>

      
    
      </div>
<?php echo form_open('users/login_validation'); ?>

<div class="container col-md-4 mx-auto" style="margin-top:200px; ">
        <h1 class="text-center" >Login</h1>
            <hr/>
    <div class="row ">
           
        <div class="col-md-9 mx-auto align-items-center" style="padding-bottom:10px">
       <!--   <h1 class="text-center"><//?php echo $title; ?></h1>-->
            <div class="form-group" >
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
            </div>
            <button type="submit"  name="login" class="btn btn-primary btn-block">Login</button>
        </div>
    </div>

</div> 

<?php echo form_close(); ?>
