
          <div class="d-flex justify-content-between flex-wrap flex-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" >
            <h1 class="h2">Details: <?php echo $entry['folder_no']; ?></h1>
            
 </div>


<div class="col-10 mx-auto">
    <form>
      <input type="hidden" name="id" value="<?php echo $entry['id']; ?>">
     <div class="row">
      <div class="form-group  col-6">
          <label  for="CaseNo.">Case Number</label>
          <input type="text" class="form-control" id="CaseNo."  readonly class="form-control-plaintext" value="<?php echo $entry['case_no']; ?>">
      </div>
      <div class="form-group  col-6">
          <label for="FolderNo.">Folder Number</label>
          <input type="text" class="form-control form-control-sm" id="FolderNo." readonly class="form-control-plaintext" value="<?php echo $entry['folder_no']; ?>">
      </div>
</div>

<div class="row">
      <div class="form-group   col-4" >
          <label for="SerialNo.">Serial Number</label>
          <input type="text" class="form-control" id="Serial No." readonly class="form-control-plaintext" value="<?php echo $entry['serial_no']; ?>"">
      </div>
      <div class="form-group  col-4">
          <label >Department</label>
          <input type="text" class="form-control" id="" readonly class="form-control-plaintext" value="<?php echo $entry['department']; ?>">
      </div>
      <div class="form-group  col-4">
          <label >Ward</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" id="" value="<?php echo $entry['ward']; ?>">
      </div>
</div>
        <div class="row">
        <div class="form-group  col-6">
          <label >First Name</label>
          <input type="text" class="form-control"  readonly class="form-control-plaintext" id="" value="<?php echo $entry['first_name']; ?>">
      </div>
      <div class="form-group  col-6">
          <label >Last Name</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" id="" value="<?php echo $entry['last_name']; ?>">
      </div>
      </div>
      <div class="row">
      <div class="form-group  col-4 ">
          <label >Date</label>
          <div class="input-group date" id="date" data-target-input="nearest">
            <input type="text" class="form-control readonlydatetimepicker-input" data-target="#date"/>
            <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
      </div>
      <div class="form-group  col-4">
          <label >Date of Admission</label>
          <div class="input-group date" id="admission_date" data-target-input="nearest">
            <input type="text" class="form-control readonly datetimepicker-input" data-target="#admission_date"/>
            <div class="input-group-append" data-target="#admission_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
      </div>
      <div class="form-group  col-4 ">
          <label >Date of Discharge</label>
          <div class="input-group date" id="discharge_date" data-target-input="nearest">
            <input type="text" class="form-control  readonlydatetimepicker-input" data-target="#discharge_date"/>
            <div class="input-group-append" data-target="#discharge_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
      </div>
</div>
      
    <div class="row">
      <div class="form-group  col 6">
          <label >Day Of Payment</label>
          <div class="input-group date" id="payment_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#payment_date"/>
            <div class="input-group-append" data-target="#payment_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
</div>
      </div>
      <div class="form-group  col-6">
          <label >Amount Paid</label>
          <div class="input-group-prepend">
          
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" value="<?php echo $entry['amount_paid']; ?>" readonly class="form-control-plaintext" id="" placeholder="">
            </div>
        </div>  
         
    </div>
    <div class="row">
    <div class="form-group  col-4">
          <label >Non Drug Bill</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" value="<?php echo $entry['non_drug_bill']; ?>" id="" placeholder="">
      </div>
      <div class="form-group  col-4">
          <label >Drug Bill</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext"  value="<?php echo $entry['drug_bill']; ?>" id="" placeholder="">
      </div>
      <div class="form-group  col-4">
          <label > Total</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" value="<?php echo $entry['total']; ?>" id="" placeholder="">
      </div>
</div>

      <div class="form-group ">
          <label >Incurred by</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" value="<?php echo $entry['incurred_by']; ?>" id="" placeholder="" >
      </div>
      <div class="row">
      <div class="form-group  col-4">
          <label >Balance</label>
          <input type="text" class="form-control" id=""  readonly class="form-control-plaintext" placeholder="" value="<?php echo $entry['balance']; ?>" >
      </div><div class="form-group  col-4">
          <label >Due Date</label>
          <div class="input-group date" id="due_date" readonly data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#due_date" />
            <div class="input-group-append" data-target="#due_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div></div>
      </div>
      <div class="form-group  col-4">
          <label >Effective from</label>
          <div class="input-group date" id="effective_from" data-target-input="nearest">
            <input type="text" class="form-control  readonly datetimepicker-input" data-target="#effective_from" />
            <div class="input-group-append" data-target="#effective_from" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div></div>
</div>
      </div>
      <h3>Declarant Information</h3>
      <hr/>
      <div class="row">
      <div class="form-group  col-6">
          <label >Name Of Declarant</label>
          <input type="text" class="form-control" id="" value="<?php echo $entry['declarant_name']; ?>" readonly class="form-control-plaintext" placeholder="" >
      </div>
      <div class="form-group  col-6">
          <label >Occupation</label>
          <input type="text" class="form-control" id="" value="<?php echo $entry['declarant_occupation']; ?>" placeholder="" readonly class="form-control-plaintext" >
      </div>
</div>
      <div class="form-group ">
          <label >Declarant Address</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" value="<?php echo $entry['declarant_address']; ?>" id="" placeholder="" >
      </div>
      <div class="form-group  ">
      <label >Date</label>
        <div class="input-group date" id="declarant_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#declarant_date" />
            <div class="input-group-append" data-target="#declarant_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        </div>
        <h3>Guarantor Information</h3>
      <hr/>
      <div class="row">
      <div class="form-group  col-6">
      <label >Name Of Guarantor</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" value="<?php echo $entry['guarantor_name']; ?>" id="" placeholder="" >
</div>
      
      <div class="form-group  col-6">
          <label >Occupation</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" value="<?php echo $entry['guarantor_occupation']; ?>" id="" placeholder="">
      </div>
</div>
      <div class="form-group ">
          <label >Guarantor Address</label>
          <input type="text" class="form-control" id="" readonly class="form-control-plaintext" placeholder="" value="<?php echo $entry['guarantor_address']; ?>" >
      </div>
      <div class="form-group  ">
      <label >Date</label>
        <div class="input-group date" id="guarantor_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#guarantor_date" />
            <div class="input-group-append" data-target="#guarantor_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        </div>
        <div class="form-group ">
          <label >Investigated By</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" id="investigator_name" placeholder="" value="<?php echo $entry['investigator_name']; ?>">
      </div>
        <h3>Recommendation</h3>
      <hr/>
      <div class="form-group ">
          <label >Name</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" value="<?php echo $entry['recommender_name']; ?>" id="" placeholder="" >
      </div>
      <div class="form-group ">
          <label >Position</label>
          <input type="text" class="form-control" readonly class="form-control-plaintext" value="<?php echo $entry['recommender_position']; ?>" id="" placeholder="" >
      </div> 
<?php if ($this->session->userdata('account_type') == "Executive") : ?> 
  <div class="row">
      <div class="form-group col-8">
          <label >Approval</label>
          <select class="select form-control" id="select" >
         
          <option value="<?php echo $entry['approval']; ?>">
                    Approve
                </option>
                <option value="Approve">
                    Approve
                </option>
                <option value="Disapprove">
                 Disapprove
                </option>
        </select>
        </div>
        <div class="form-group col-4">
          <label >Submit Approval</label>
       <!-- <button class="btn btn-primary btn-lg btn-block"  href="</?php echo site_url('/entries/update_approval/'.$entry['folder_no']); ?>" type="submit">Submit</button>-->
          <a class="btn btn-primary btn-lg btn-block"  href="<?php echo site_url('entries/update_approval/'.$entry['folder_no']); ?>" type="submit">Submit</a>
      </div> 
</div>
    <?php endif; ?>
      <h3 >Submit</h3>
      <hr/>
      <div class="row">
      <div class="form-group  col-6">
     
      </div>
      <div class="form-group  col-6">
      <button class="btn btn-primary btn-lg btn-block"  href="<?php echo base_url(); ?>entries/view_entry" type="submit">Go Back</button>
      </div>
</div>
</div>
