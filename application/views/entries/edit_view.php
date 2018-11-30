     
     <div class="d-flex justify-content-between flex-wrap flex-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">UPDATE ENTRY: <?php echo $entry['folder_no']; ?></h1>
 </div>

<?php echo validation_errors(); ?>
<?php echo form_open('entries/update'); ?>
<div class="mx-auto col-10 "> 
<input type="hidden" name="id" value="<?php echo $entry['id']; ?>">
 <div class="row">

      <div class="form-group col-6">
          <label >Case Number</label>
          <input type="text" class="form-control" id="CaseNo." placeholder="Case Number" name="case_no" value="<?php echo $entry['case_no']; ?>">
      </div>
      <div class="form-group col-6">
          <label >Folder Number</label>
          <input type="text" class="form-control" id="FolderNo." placeholder="Folder Number" name="folder_no" value="<?php echo $entry['folder_no']; ?>">
      </div>
</div>


<div class="row">
      <div class="form-group  col-4" >
          <label for="SerialNo.">Serial Number</label>
          <input type="text" class="form-control" id="Serial No." value="<?php echo $entry['serial_no']; ?>"">
      </div>
      <div class="form-group col-4">
          <label >Department</label>
          <input type="text" class="form-control" id=""  value="<?php echo $entry['department']; ?>">
      </div>
      <div class="form-group col-4">
          <label >Ward</label>
          <input type="text" class="form-control"  id="" value="<?php echo $entry['ward']; ?>">
      </div>
</div>
        <div class="row">
        <div class="form-group col-6">
          <label >First Name</label>
          <input type="text" class="form-control"   id="" value="<?php echo $entry['first_name']; ?>">
      </div>
      <div class="form-group col-6">
          <label >Last Name</label>
          <input type="text" class="form-control"  id="" value="<?php echo $entry['last_name']; ?>">
      </div>
      </div>
      <div class="row">
      <div class="form-group col-4">
          <label >Date</label>
           <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder=" Date" id="crdate_datepicker" name="date" value="<?php echo $entry['date']; ?>">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
      </div>
      <div class="form-group col-4">
          <label >Date of Admission</label>
          <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Entry Date" id="admission_datepicker" name="admission_date" value="<?php echo $entry['admission_date']; ?>">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
      </div>
      <div class="form-group col-4 ">
          <label >Date of Discharge</label>
          <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Entry Date" id="discharge_datepicker" name="discharge_date" value="<?php echo $entry['discharge_date']; ?>">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
      </div>
</div>
      
    <div class="row">
      <div class="form-group col 6">
          <label >Day Of Payment</label>
         <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Payment Date" id="payment_datepicker" name="payment_date">
    <div class="input-group-append" value="<?php echo $entry['payment_date']; ?>">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
      </div>
      <div class="form-group col-6">
          <label >Amount Paid</label>
          <div class="input-group-prepend">
          
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" value="<?php echo $entry['amount_paid']; ?>" id="" placeholder="">
            </div>
        </div>  
         
    </div>
    <div class="row">
    <div class="form-group col-4">
          <label >Non Drug Bill</label>
          <input type="text" class="form-control"  value="<?php echo $entry['non_drug_bill']; ?>" id="" placeholder="">
      </div>
      <div class="form-group col-4">
          <label >Drug Bill</label>
          <input type="text" class="form-control"   value="<?php echo $entry['drug_bill']; ?>" id="" placeholder="">
      </div>
      <div class="form-group col-4">
          <label > Total</label>
          <input type="text" class="form-control"  value="<?php echo $entry['total']; ?>" id="" placeholder="">
      </div>
</div>
<div class="form-group">
          <label >Incurred by</label>
          <input type="text" class="form-control"  value="<?php echo $entry['incurred_by']; ?>" id="" placeholder="" name="incurred_by">
      </div>
      
      <div class="row">
      <div class="form-group col-4">
          <label >Balance</label>
          <input type="text" class="form-control" id=""  placeholder="" value="<?php echo $entry['balance']; ?>" name="balance">
      </div><div class="form-group col-4">
          <label >Due Date</label>
           <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Due Date" id="due_datepicker" name="due_date" value="<?php echo $entry['due_date']; ?>">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
      </div>
      <div class="form-group col-4">
          <label >Effective from</label>
          <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Effective From" id="effective_datepicker" name="effective_from" value="<?php echo $entry['effective_from']; ?>">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
</div>
      </div>
      <h3>Declarant Information</h3>
      <hr/>
      <div class="row">
      <div class="form-group col-6">
          <label >Name Of Declarant</label>
          <input type="text" class="form-control" id="" value="<?php echo $entry['declarant_name']; ?>"  placeholder="" name="declarant_name">
      </div>
      <div class="form-group col-6">
          <label >Occupation</label>
          <input type="text" class="form-control" id="" value="<?php echo $entry['declarant_occupation']; ?>" placeholder=""  name="declarant_occupation">
      </div>
</div>
      <div class="form-group">
          <label >Declarant Address</label>
          <input type="text" class="form-control"  value="<?php echo $entry['declarant_address']; ?>" id="" placeholder="" name="declarant_address">
      </div>
      <div class="form-group ">
      <label >Date</label>
         <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Entry Date" id="declarant_datepicker" name="declarant_date" value="<?php echo $entry['declarant_date']; ?>">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
        </div>
        <h3>Guarantor Information</h3>
      <hr/>
      <div class="row">
      <div class="form-group col-6">
      <label >Name Of Guarantor</label>
          <input type="text" class="form-control"  value="<?php echo $entry['guarantor_name']; ?>" id="" placeholder="" name="guarantor_name">
</div>
      
      <div class="form-group col-6">
          <label >Occupation</label>
          <input type="text" class="form-control"  value="<?php echo $entry['guarantor_occupation']; ?>" id="" placeholder="" name="guarantor_occupation">
      </div>
</div>
      <div class="form-group">
          <label >Guarantor Address</label>
          <input type="text" class="form-control" id="" placeholder="" value="<?php echo $entry['guarantor_address']; ?>" name="guarantor_address">
      </div>
      <div class="form-group ">
      <label >Date</label>
         <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Date" id="guarantor_datepicker" name="guarantor_date">
    <div class="input-group-append" value="<?php echo $entry['guarantor_date']; ?>">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
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
          <label >Name</label>
          <input type="text" class="form-control"  value="<?php echo $entry['recommender_name']; ?>" id="" placeholder="" name="recommender_name" >
      </div>
      <div class="form-group">
          <label >Position</label>
          <input type="text" class="form-control"  value="<?php echo $entry['recommender_position']; ?>" id="" placeholder="" name="recommender_position">
      </div> 
      <h3 >Submit</h3>
      <hr/>
      <div class="row">
      <div class="form-group col-6">
      <button class="btn btn-primary btn-lg btn-block" type="submit">Edit</button>
      <!--<button class="btn btn-primary btn-lg btn-block"  href="</?php echo base_url(); ?>entries/update" type="submit">Edit</button>-->
      </div>
      <div class="form-group col-6">
      <button class="btn btn-primary btn-lg btn-block"  href="<?php echo base_url(); ?>entries" type="submit">Go Back</button>
      </div>
</div>
</div>
</form>