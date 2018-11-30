

        
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">NEW ENTRY</h1>
 </div>

 <?php echo validation_errors(); ?>
   <?php echo form_open('entries/create'); ?>
  
   <div class="mx-auto col-10 "> 
     <div class="row">
      <div class="form-group col-6">
          <label >Case Number</label>
          <input type="text" class="form-control" id="CaseNo." placeholder="Case Number" name="case_no" >
      </div>
      <div class="form-group col-6">
          <label >Folder Number</label>
          <input type="text" class="form-control" id="FolderNo." placeholder="Folder Number" name="folder_no">
      </div>
</div>

<div class="row">
      <div class="form-group  col-4" >
          <label for="SerialNo.">Serial Number</label>
          <input type="text" class="form-control" id="Serial No." placeholder="Serial Number" name="serial_no">
      </div>
      <div class="form-group col-4">
          <label for="">Department</label>
          <input type="text" class="form-control" id="" placeholder="" name="department">
      </div>
      <div class="form-group col-4">
          <label for="">Ward</label>
          <input type="text" class="form-control" id="" placeholder="" name="ward">
      </div>
</div>
        <div class="row">
        <div class="form-group col-6">
          <label for="">First Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="first_name">
      </div>
      <div class="form-group col-6">
          <label >Last Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="last_name">
      </div>
      </div>
      <div class="row">
            <div class="form-group col-4">
                <label >Date</label>
                <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder=" Date" id="crdate_datepicker" name="date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
           </div>
            <div class="form-group col-4">
                <label >Date of Admission</label>
                <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Entry Date" id="admission_datepicker" name="admission_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
            </div>
            <div class="form-group col-4 ">
                <label for="">Date of Discharge</label>
                 <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Entry Date" id="discharge_datepicker" name="discharge_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
      </div>
</div>
      
    <div class="row">
      <div class="form-group col-6">
          <label for="">Day Of Payment</label>
           <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Payment Date" id="payment_datepicker" name="payment_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
      </div>
      <div class="form-group col-6">
          <label for="">Amount Paid</label>
          <div class="input-group-prepend">
          
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" id="" placeholder="" name="amount_paid">
            </div>
        </div>  
        
    </div>
    <div class="row">
    <div class="form-group col-4">
          <label for="">Non Drug Bill</label>
          <input type="text" class="form-control" id="" placeholder="" name="non_drug_bill">
      </div>
      <div class="form-group col-4">
          <label for="">Drug Bill</label>
          <input type="text" class="form-control" id="" placeholder="" name="drug_bill">
      </div>
      <div class="form-group col-4">
          <label for=""> Total</label>
          <input type="text" class="form-control" id="" placeholder="" name="total">
      </div>
</div>

      <div class="form-group">
          <label for="">Incurred by</label>
          <input type="text" class="form-control" id="" placeholder="" name="incurred_by">
      </div>
      <div class="row">
      <div class="form-group col-4">
          <label for="">Balance</label>
          <input type="text" class="form-control" id="" placeholder="" name="balance">
      </div><div class="form-group col-4">
          <label for="">Due Date</label>
           <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Due Date" id="due_datepicker" name="due_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
      </div>
      <div class="form-group col-4">
          <label for="">Effective from</label>
          <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Effective From" id="effective_datepicker" name="effective_from">
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
          <label for="">Name Of Declarant</label>
          <input type="text" class="form-control" id="" placeholder="" name="declarant_name">
      </div>
      <div class="form-group col-6">
          <label for="">Occupation</label>
          <input type="text" class="form-control" id="" placeholder="" name="declarant_occupation">
      </div>
</div>
      <div class="form-group">
          <label for="">Declarant Address</label>
          <input type="text" class="form-control" id="" placeholder="" name="declarant_address">
      </div>
      <div class="form-group ">
      <label >Date</label>
         <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Entry Date" id="declarant_datepicker" name="declarant_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
        </div>
        <h3>Guarantor Information</h3>
      <hr/>
      <div class="row">
      <div class="form-group col-6">
      <label for="">Name Of Guarantor</label>
          <input type="text" class="form-control" id="" placeholder="" name="guarantor_name">
</div>
      
      <div class="form-group col-6">
          <label for="">Occupation</label>
          <input type="text" class="form-control" id="" placeholder="" name="guarantor_occupation">
      </div>
</div>
      <div class="form-group">
          <label for="">Guarantor Address</label>
          <input type="text" class="form-control" id="" placeholder="" name="guarantor_address">
      </div>
      <div class="form-group ">
      <label >Date</label>
       <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Date" id="guarantor_datepicker" name="guarantor_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
        </div>
        <div class="form-group">
          <label >Investigated By</label>
          <input type="text" class="form-control" id="investigator_name" placeholder="" name="investigator_name">
      </div>
        <h3>Recommendation</h3>
      <hr/>
      <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="recommender_name" >
      </div>
      <div class="form-group">
          <label>Position</label>
          <input type="text" class="form-control" id="" placeholder="" name="recommender_position">
      </div>    
      <div class="form-group">
          <label for="">Recommendation</label>
          <select class="select form-control" id="select" name="recommendation">
         
                <option value="Approve">
                    Approve
                </option>
                <option value="Disapprove">
                 Disapprove
                </option>
        </select>
        <input type="hidden" name="approval" value="pending" />
      </div> 
      <?php  if ($this->session->userdata('account_type') == "Executive") : ?>
      <?php endif; ?>
     
      
    

        <button class="btn btn-primary btn btn-block" type="submit">Submit </button>
         </div>
    </form>


