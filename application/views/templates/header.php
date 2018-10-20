<!--
<html>
<head>
<title>Main</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
link rel="stylesheet" type="text/css" href="</?php echo base_url(); ?>css/dashboard.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>

            </ul>
            <ul class="navbar-nav">
           
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/account" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </li>-->
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Welfare</title>

    <!-- Bootstrap core CSS -->
  <!--  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/dashboard.css">    
    <!-- Custom styles for this template -->
    
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo base_url(); ?>">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      
     <!-- <ul class="navbar-nav">
                <li class="nav-item dropdown text-nowrap">
                    <a class="nav-link dropdown-toggle" href="/account" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div> </li></ul> -->
          <ul class="navbar-nav px-3"> 
         
               
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url(); ?>/signout">Sign out</a>
        </li>
       
        
      </ul>
    </nav>