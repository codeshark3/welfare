<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

  <div class="col-6 ">
 <?php echo validation_errors(); ?>
   <?php echo form_open('entries/create'); ?>
     <div class="row">
      <div class="form-group col-md-6">
          <label >Case Number</label>
          <input type="text" class="form-control" id="CaseNo." placeholder="Case Number" name="case_no" >
      </div>
      <div class="form-group col-md-6">
          <label >Folder Number</label>
          <input type="text" class="form-control" id="FolderNo." placeholder="Folder Number" name="folder_no">
      </div>
</div>

<div class="row">
      <div class="form-group  col-md-4" >
          <label for="SerialNo.">Serial Number</label>
          <input type="text" class="form-control" id="Serial No." placeholder="Serial Number" name="serial_no">
      </div>
      <div class="form-group col-md-4">
          <label for="">Department</label>
          <input type="text" class="form-control" id="" placeholder="" name="department">
      </div>
      <div class="form-group col-md-4">
          <label for="">Ward</label>
          <input type="text" class="form-control" id="" placeholder="" name="ward">
      </div>
</div>
        <div class="row">
        <div class="form-group col-md-6">
          <label for="">First Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="first_name">
      </div>
      <div class="form-group col-md-6">
          <label >Last Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="last_name">
      </div>
      </div>
      <div class="row">
            <div class="form-group col-md-4">
                <label >Date</label>
                <div class="input-group date" id="date" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#date" name="date"/>
                    <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
           </div>
            <div class="form-group col-md-4">
                <label >Date of Admission</label>
                <div class="input-group date" id="admission_date" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#admission_date" name="admission_date"/>
                    <div class="input-group-append" data-target="#admission_date" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 ">
                <label for="">Date of Discharge</label>
                <div class="input-group date" id="discharge_date" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#discharge_date" name="discharge_date"/>
                    <div class="input-group-append" data-target="#discharge_date" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
      </div>
</div>
      
    <div class="row">
      <div class="form-group col-md-6">
          <label for="">Day Of Payment</label>
          <div class="input-group date" id="payment_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#payment_date" name="payment_date"/>
            <div class="input-group-append" data-target="#payment_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
</div>
      </div>
      <div class="form-group col-md-6">
          <label for="">Amount Paid</label>
          <div class="input-group-prepend">
          
            <span class="input-group-text">GHS</span>
            <input type="text" class="form-control" id="" placeholder="" name="amount_paid">
            </div>
        </div>  
         
    </div>
    <div class="row">
    <div class="form-group col-md-4">
          <label for="">Non Drug Bill</label>
          <input type="text" class="form-control" id="" placeholder="" name="non_drug_bill">
      </div>
      <div class="form-group col-md-4">
          <label for="">Drug Bill</label>
          <input type="text" class="form-control" id="" placeholder="" name="drug_bill">
      </div>
      <div class="form-group col-md-4">
          <label for=""> Total</label>
          <input type="text" class="form-control" id="" placeholder="" name="total">
      </div>
</div>

      <div class="form-group">
          <label for="">Incurred by</label>
          <input type="text" class="form-control" id="" placeholder="" name="incurred_by">
      </div>
      <div class="row">
      <div class="form-group col-md-4">
          <label for="">Balance</label>
          <input type="text" class="form-control" id="" placeholder="" name="balance">
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
          <input type="text" class="form-control" id="" placeholder="" name="declarant_name">
      </div>
      <div class="form-group col-md-6">
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
          <input type="text" class="form-control" id="" placeholder="" name="guarantor_name">
</div>
      
      <div class="form-group col-md-6">
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
        <div class="input-group date" id="guarantor_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#guarantor_date" name="guarantor_date"/>
            <div class="input-group-append" data-target="#guarantor_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
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
     
      
   
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit form</button>
    </form>

  </div>

        
</div>
