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
    <form>
     <div class="row">
      <div class="form-group col-md-6">
          <label  for="CaseNo.">Case Number</label>
          <input type="text" class="form-control" id="CaseNo." placeholder="Case Number">
      </div>
      <div class="form-group col-md-6">
          <label for="FolderNo.">Folder Number</label>
          <input type="text" class="form-control" id="FolderNo." placeholder="Folder  Number">
      </div>
</div>

<div class="row">
      <div class="form-group  col-md-4" >
          <label for="SerialNo.">Serial Number</label>
          <input type="text" class="form-control" id="Serial No." placeholder="Serial Number">
      </div>
      <div class="form-group col-md-4">
          <label for="">Department</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group col-md-4">
          <label for="">Ward</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
</div>
        <div class="row">
        <div class="form-group col-md-6">
          <label for="">First Name</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group col-md-6">
          <label for="">Last Name</label>
          <input type="text" class="form-control" id="" placeholder="">
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
            <input type="text" class="form-control" id="" placeholder="">
            </div>
        </div>  
         
    </div>
    <div class="row">
    <div class="form-group col-md-4">
          <label for="">Non Drug Bill</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group col-md-4">
          <label for="">Drug Bill</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group col-md-4">
          <label for=""> Total</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
</div>

      <div class="form-group">
          <label for="">Incurred by</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="row">
      <div class="form-group col-md-4">
          <label for="">Balance</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div><div class="form-group col-md-4">
          <label for="">Due date</label>
          <div class="input-group date" id="due_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#due_date"/>
            <div class="input-group-append" data-target="#due_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div></div>
      </div>
      <div class="form-group col-md-4">
          <label for="">Effective from</label>
          <div class="input-group date" id="effective_date" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#effective_date"/>
            <div class="input-group-append" data-target="#effective_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div></div>
</div>
      </div>
      <div class="row">
      <div class="form-group col-md-6">
          <label for="">Name Of Declarant</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group col-md-6">
          <label for="">Occupation</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
</div>
      <div class="form-group">
          <label for="">Declarant Address</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group ">
        <div class="input-group date" id="datetimepicker-demo" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker-demo"/>
            <div class="input-group-append" data-target="#datetimepicker-demo" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        </div>
      <hr/>
      <div class="row">
      <div class="form-group col-md-6">
      <label for="">Name Of Guarantor</label>
          <input type="text" class="form-control" id="" placeholder="">
</div>
      
      <div class="form-group col-md-6">
          <label for="">Occupation</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
</div>
      <div class="form-group">
          <label for="">Guarantor Address</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      
      <div class="form-group">
          <label for="">Date</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      <hr/>
      <!--
      <div class="form-group">
          <label for="">Recommendation</label>
          <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recommendation</button>
                
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                   
                    <a class="dropdown-item" href="#">Approved</a>
                    <a class="dropdown-item" href="#">Disapproved</a>
                </div>
          </div>
      </div>

      <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
          <label for="">Position</label>
          <input type="text" class="form-control" id="" placeholder="">
      </div>
     -->
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit form</button>
    </form>

  </div>

        
</main>
