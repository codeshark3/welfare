
 
<div class="col-md-2"> 
        <div class="container-fluid">
              <div class="row">
                <div class="col-sm-3 col-md-2 sidebar" style="background: 
#0c6fb8; color:#ffffff; ">
                    <img src="<?php echo base_url(); ?>static/img/kbthlogo.png" class="img-fluid" alt="Responsive image">
                    <hr/>
                  <ul class="nav nav-sidebar">
                  <?php  if ($this->session->userdata('account_type') == "Executive") : ?>
                    <li class="nav-item">
                            
                        <a class="nav-link active"  style="font-size:22px;color: #fff" href="<?php echo base_url(); ?>/dashboard">
                          <span data-feather="home"></span>
                          Dashboard <span class="sr-only">(current)</span>
                        </a>  
                      </li>
                    <?php endif; ?>
                      <div><hr/></div> 
                       <?php  if ($this->session->userdata('account_type') == "User") : ?>
                      <li class="nav-item">
     
                        <a class="nav-link" href="<?php echo base_url(); ?>entries" style="font-size:22px">
                          <span data-feather="file"></span>
                        View Entries
                        </a >
                      </li>
                      <div><hr/></div>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>entries/create" style="font-size:22px">
                          <span data-feather="list"></span>
                        Add New Entry
                        </a>
                      </li>
                      <div><hr/></div>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>tracking/view" style="font-size:22px">
                          <span data-feather="users"></span>
                          Tracking
                        </a>
                      </li>
                      <div><hr/></div><br/>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>tracking/create" style="font-size:22px">
                          <span data-feather="users"></span>
                        New Bill Entry
                        </a>
                      </li>
                      <div><hr/></div><br>
                      <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size:22px">
                          <span data-feather="users"></span>
                   
                        </a>
                      </li> <?php endif; ?>
                  </ul>
                </div>
</div>
</div>
</div>
        
      