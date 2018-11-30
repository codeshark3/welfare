
            <!-- <h1 class="h2">Accounts</h1>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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
-->


 <!-- <div class="row"  style="margin-left: 70px;">
  <div class="col-sm-10" id="main" style="padding-top: 20px;"><div class="col-sm-4">

 <div class="col-6 mx-auto ">-->

<?php echo $this->session->flashdata('errorMessage');?>
<?php echo $this->session->flashdata('successMessage');?>
<?php echo form_open('accounts/register_account'); ?>
<?php echo form_fieldset('<h1 class="text-primary">Register Account</h1>'); ?>
<div class="row mx-auto">
			<div class="col-6 ">
		<div class="form-group   ">
			<label for='Username'>Username</label>
			<input type="text" name="Username" class="form-control  input-md">
		</div>
	</div>
	<div class="col-6 ">
		<div class="form-group">
			<label for='Password'>Password</label>
			<input type="password" name="Password" class="form-control input-md">
		</div>
	</div>
</div>
<div class="row mx-auto">
<div class="col-6">
<div class="form-group">
	<label for='repeat_password'>Repeat Password</label>
	<input type="password" name="repeat_password" class="form-control  input-md">
</div>
</div>
<div class="col-6">
<div class="form-group">
	<label for='account_type'>Account Type</label>
	<select name="account_type" class="form-control input-md">
		<option>Admin</option>
		<option>Executive</option>
		<option>User</option>
	</select>
</div>
</div>
</div>

<div class="form-group">
	<input type="submit" name="submit_account" class="btn btn-primary  btn-block" value="Register">
</div>
</div>
<?php echo form_close(); ?>
</form>

		<div class="col-12 mx-auto" style="margin-top:20px">
			<?php echo form_fieldset('<h1 class="text-primary">Registed Accounts</h1>'); ?>
			<table class="table table-striped table-hover ">
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Account Type</th>
					<th>Date/Time Created</th>
					<th>Action</th>
				</tr>
				<?php
				$count = 1; 
				?>
				<?php foreach($accountsList as $account) :?>
				<tr>
					<?php
					$id = $account->id;
					?>
					<td><?php echo $count++; ?></td>
					<td><?php echo $account->username ?></td>
					<td><?php echo $account->account_type ?></td>
					<td><?php echo $account->date_created ?></td>
					<td><a href="<?php echo base_url("accounts/delete/$id"); ?>" class="btn btn-danger btn-md">Delete</a></td>
				</tr>
			<?php endforeach;?>
			</table>
			</div>
      



