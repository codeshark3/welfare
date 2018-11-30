
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom head">
            <h1 class="h2">CREATE BILLS</h1>
 </div>

<?php echo validation_errors(); ?>
   <?php echo form_open('bill/create_bill'); ?>
  
   <div class=" mx-auto col-10 mb-4 "> 
     
      <div class="form-group ">
          <label >Patient Name</label>
          <input type="text" class="form-control" id="CaseNo." placeholder="Patient Name" name="patient_name" >
      </div>


      <div class="row">
      <div class="form-group col-6" >
         <label>Entry Date</label>
           <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Entry Date" id="date_datepicker" name="entry_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
    </div>
      <div class="form-group col-6">
          <label  >Submission Date</label>
           <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Submission Date" id="subdate_datepicker" name="sub_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
    </div>
      </div>
</div>
</div>

<div class="row">
      <div class="form-group col-6">
         <label >Folder Number</label>
          <input type="text" class="form-control" id="FolderNo." placeholder="Folder Number" name="folder_no">
          
    </div>
     <div class="form-group col-6">
          <label >Reciept Number</label>
          <input type="text" class="form-control" id="" placeholder="" name="reciept_no">
      </div>
         
      </div>
 
  <h3>Bill Information</h3>
      <hr/>

        <div class="row">
        <div class="form-group col-6">
          <label>Drug Bill</label>
  
          <div class="input-group-prepend">
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" id="" placeholder="Drug Bill" name="drug_bill">
            </div>
      </div>
      <div class="form-group col-6">
          <label>Service Bill</label>
        
          <div class="input-group-prepend">
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" id="" placeholder="Service Bill" name="service_bill">
            </div>
      </div>
      </div>
 
            
     
    <div class="row">
      <div class="form-group col-6">
          <label>Total Bill Payable</label>
         
         <div class="input-group-prepend">
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" id="" placeholder="Total Bill Payable" name="total">
            </div>
            </div> 

             <div class="form-group col-6">
          <label >Payment</label>
          <div class="input-group-prepend">
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" id="" placeholder="" name="payment">
            </div>
        </div>  
        
</div>
     
    
    
 
<div class="row">
      <div class="form-group col-6">
          <label>Total Payment</label>
          
           <div class="input-group-prepend">
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" id="" placeholder="Total Payment" name="total_payment">
            </div>
      </div>
      
      <div class="form-group col-6">
          <label >Balance</label>
          
           <div class="input-group-prepend">
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" id="" placeholder="Balance" name="balance">
            </div>
      </div>
    
      </div>

      <div class="form-group  ">
          <label >Remarks</label>
         <textarea class="form-control" id="" placeholder="" name="remarks"></textarea>
      </div>
  


     
      <?php  if ($this->session->userdata('account_type') == "Executive") : ?>
      <?php endif; ?>
     
<h3>Social Welfare Officer Information</h3>
      <hr/>
      <div class="row">
          <div class="form-group col-6">
          <label  >Social Welfare Officer Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="sw_name">
      </div>
      <div class="form-group col-6" >
         <label>Date</label>
           <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Date" id="sw_datepicker" name="sw_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
    </div>
     
      </div>
      <h3>Accountant Information</h3>
      <hr/>
       <div class="row">
          <div class="form-group col-6">
          <label  >Accountant Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="accountant_name">
      </div>
      <div class="form-group col-6" >
         <label>Date</label>
           <div class="start_date input-group mb-4">
    <input class="form-control start_date" type="text" placeholder="Date" id="acc_datepicker" name="acc_date">
    <div class="input-group-append">
      <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
      </div>
      </div>
    </div>
     
      </div>


       <div class="form-group ">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
         </div>
       </div>
    </form>



