<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <!--
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
              
            </div>
--> </div>


<div class="col-6 mx-auto">
<?php echo form_open('entries/update'); ?>
     <div class="row">
      <div class="form-group col-md-6">
          <label  for="CaseNo.">Case Number</label>
          <input type="text" class="form-control" id="CaseNo."   value="<?php echo $entry['case_no']; ?>">
      </div>
      <div class="form-group col-md-6">
          <label for="FolderNo.">Folder Number</label>
          <input type="text" class="form-control" id="FolderNo." value="<?php echo $entry['folder_no']; ?>">
      </div>
</div>

<div class="row">
      <div class="form-group  col-md-4" >
          <label for="SerialNo.">Serial Number</label>
          <input type="text" class="form-control" id="Serial No." value="<?php echo $entry['serial_no']; ?>"">
      </div>
      <div class="form-group col-md-4">
          <label for="">Department</label>
          <input type="text" class="form-control" id=""  value="<?php echo $entry['department']; ?>">
      </div>
      <div class="form-group col-md-4">
          <label for="">Ward</label>
          <input type="text" class="form-control"  id="" value="<?php echo $entry['ward']; ?>">
      </div>
</div>
        <div class="row">
        <div class="form-group col-md-6">
          <label for="">First Name</label>
          <input type="text" class="form-control"   id="" value="<?php echo $entry['first_name']; ?>">
      </div>
      <div class="form-group col-md-6">
          <label for="">Last Name</label>
          <input type="text" class="form-control"  id="" value="<?php echo $entry['last_name']; ?>">
      </div>
      </div>
      <div class="row">
      <div class="form-group col-md-4">
          <label for="">Date</label>
          <div class="input-group date" id="date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#date"/>
            <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
      </div>
      <div class="form-group col-md-4">
          <label for="">Date of Admission</label>
          <div class="input-group date" id="admission_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#admission_date"/>
            <div class="input-group-append" data-target="#admission_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
      </div>
      <div class="form-group col-md-4 ">
          <label for="">Date of Discharge</label>
          <div class="input-group date" id="discharge_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#discharge_date"/>
            <div class="input-group-append" data-target="#discharge_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
      </div>
</div>
      
    <div class="row">
      <div class="form-group col-md 6">
          <label for="">Day Of Payment</label>
          <div class="input-group date" id="payment_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#payment_date"/>
            <div class="input-group-append" data-target="#payment_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
</div>
      </div>
      <div class="form-group col-md-6">
          <label for="">Amount Paid</label>
          <div class="input-group-prepend">
          
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" value="<?php echo $entry['amount_paid']; ?>" id="" placeholder="">
            </div>
        </div>  
         
    </div>
    <div class="row">
    <div class="form-group col-md-4">
          <label for="">Non Drug Bill</label>
          <input type="text" class="form-control"  value="<?php echo $entry['non_drug_bill']; ?>" id="" placeholder="">
      </div>
      <div class="form-group col-md-4">
          <label for="">Drug Bill</label>
          <input type="text" class="form-control"   value="<?php echo $entry['drug_bill']; ?>" id="" placeholder="">
      </div>
      <div class="form-group col-md-4">
          <label for=""> Total</label>
          <input type="text" class="form-control"  value="<?php echo $entry['total']; ?>" id="" placeholder="">
      </div><div class="form-group">
          <label for="">Incurred by</label>
          <input type="text" class="form-control"  value="<?php echo $entry['incurred_by']; ?>" id="" placeholder="" name="incurred_by">
      </div>
</div>

      
      <div class="row">
      <div class="form-group col-md-4">
          <label for="">Balance</label>
          <input type="text" class="form-control" id=""  placeholder="" value="<?php echo $entry['balance']; ?>" name="balance">
      </div><div class="form-group col-md-4">
          <label for="">Due Date</label>
          <div class="input-group date" id="due_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#due_date" name="due_date"/>
            <div class="input-group-append" data-target="#due_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div></div>
      </div>
      <div class="form-group col-md-4">
          <label for="">Effective from</label>
          <div class="input-group date" id="effective_from" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#effective_from" name="effective_from"/>
            <div class="input-group-append" data-target="#effective_from" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div></div>
</div>
      </div>
      <h3>Declarant Information</h3>
      <hr/>
      <div class="row">
      <div class="form-group col-md-6">
          <label for="">Name Of Declarant</label>
          <input type="text" class="form-control" id="" value="<?php echo $entry['declarant_name']; ?>"  placeholder="" name="declarant_name">
      </div>
      <div class="form-group col-md-6">
          <label for="">Occupation</label>
          <input type="text" class="form-control" id="" value="<?php echo $entry['declarant_occupation']; ?>" placeholder=""  name="declarant_occupation">
      </div>
</div>
      <div class="form-group">
          <label for="">Declarant Address</label>
          <input type="text" class="form-control"  value="<?php echo $entry['declarant_address']; ?>" id="" placeholder="" name="declarant_address">
      </div>
      <div class="form-group ">
      <label >Date</label>
        <div class="input-group date" id="declarant_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#declarant_date" name="declarant_date"/>
            <div class="input-group-append" data-target="#declarant_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        </div>
        <h3>Guarantor Information</h3>
      <hr/>
      <div class="row">
      <div class="form-group col-md-6">
      <label for="">Name Of Guarantor</label>
          <input type="text" class="form-control"  value="<?php echo $entry['guarantor_name']; ?>" id="" placeholder="" name="guarantor_name">
</div>
      
      <div class="form-group col-md-6">
          <label for="">Occupation</label>
          <input type="text" class="form-control"  value="<?php echo $entry['guarantor_occupation']; ?>" id="" placeholder="" name="guarantor_occupation">
      </div>
</div>
      <div class="form-group">
          <label for="">Guarantor Address</label>
          <input type="text" class="form-control" id="" placeholder="" value="<?php echo $entry['guarantor_address']; ?>" name="guarantor_address">
      </div>
      <div class="form-group ">
      <label >Date</label>
        <div class="input-group date" id="guarantor_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#guarantor_date" name="guarantor_date"/>
            <div class="input-group-append" data-target="#guarantor_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        </div>
        <div class="form-group">
          <label >Investigated By</label>
          <input type="text" class="form-control"  id="investigator_name" placeholder="" value="<?php echo $entry['investigator_name']; ?>" name="investigator_name">
      </div>
        <h3>Recommendation</h3>
      <hr/>
      <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control"  value="<?php echo $entry['recommender_name']; ?>" id="" placeholder="" name="recommender_name" >
      </div>
      <div class="form-group">
          <label for="">Position</label>
          <input type="text" class="form-control"  value="<?php echo $entry['recommender_position']; ?>" id="" placeholder="" name="recommender_position">
      </div> 
      <h3 >Submit</h3>
      <hr/>
      <div class="row">
      <div class="form-group col-6">
      <button class="btn btn-primary btn-lg btn-block"  href="<?php echo base_url(); ?>update" type="submit">Edit</button>
      </div>
      <div class="form-group col-6">
      <button class="btn btn-primary btn-lg btn-block"  href="<?php echo base_url(); ?>entries/view_entry" type="submit">Go Back</button>
      </div>
</div>
</div>
