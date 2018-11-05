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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/dashboard.css">
<!--<script src="</?php echo base_url(); ?>static/js/jquery-3.3.1.slim.min.js"><script>-->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css"/>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/font-awesome.min.css">       
    <!-- Custom styles for this template -->
    
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="padding">
   <!-- <nav class="navbar navbar-dark fixed-top navbar-expand-lg bg-dark " style="padding">-->
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
    <br />
    <br />
    <br />
    <h2 align="center">Live Data Search in Codeigniter using Ajax JQuery</h2><br />
    <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">Search</span>
        <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control"  />
        </div>
    </div>
    <br />
    <div id="result"></div>
    </div>
    <div style="clear:both"></div>
    <br />
    <br />
    <br />
    <br />
   



</div>


 
 <script src="<?php echo base_url(); ?>static/js/popper.min.js"></script><script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/moment-with-locales.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>



<!--

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->

</body>
</html>


<script type="text/javascript">
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  jQuery.ajax({
   url:"<?php echo base_url(); ?>ajaxsearch/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
