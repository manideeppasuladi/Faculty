<?php echo form_open('personal_info/edit/'.$personal_info['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $personal_info['Name']); ?>" class="form-control" id="Name" />
		</div>
	</div>
	<div class="form-group">
		<label for="DEPT" class="col-md-4 control-label">DEPT</label>
		<div class="col-md-8">
			<input type="text" name="DEPT" value="<?php echo ($this->input->post('DEPT') ? $this->input->post('DEPT') : $personal_info['DEPT']); ?>" class="form-control" id="DEPT" />
		</div>
	</div>
	<div class="form-group">
		<label for="emp_id" class="col-md-4 control-label">Emp Id</label>
		<div class="col-md-8">
			<input type="text" name="emp_id" value="<?php echo ($this->input->post('emp_id') ? $this->input->post('emp_id') : $personal_info['emp_id']); ?>" class="form-control" id="emp_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $personal_info['email']); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="phone_no" class="col-md-4 control-label">Phone No</label>
		<div class="col-md-8">
			<input type="text" name="phone_no" value="<?php echo ($this->input->post('phone_no') ? $this->input->post('phone_no') : $personal_info['phone_no']); ?>" class="form-control" id="phone_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="date_of_joining" class="col-md-4 control-label">Date Of Joining</label>
		<div class="col-md-8">
			<input type="text" name="date_of_joining" value="<?php echo ($this->input->post('date_of_joining') ? $this->input->post('date_of_joining') : $personal_info['date_of_joining']); ?>" class="form-control" id="date_of_joining" />
		</div>
	</div>
	<div class="form-group">
		<label for="PAN" class="col-md-4 control-label">PAN</label>
		<div class="col-md-8">
			<input type="text" name="PAN" value="<?php echo ($this->input->post('PAN') ? $this->input->post('PAN') : $personal_info['PAN']); ?>" class="form-control" id="PAN" />
		</div>
	</div>
	<div class="form-group">
		<label for="aadhaar" class="col-md-4 control-label">Aadhaar</label>
		<div class="col-md-8">
			<input type="text" name="aadhaar" value="<?php echo ($this->input->post('aadhaar') ? $this->input->post('aadhaar') : $personal_info['aadhaar']); ?>" class="form-control" id="aadhaar" />
		</div>
	</div>
	<div class="form-group">
		<label for="JNTU_no" class="col-md-4 control-label">JNTU No</label>
		<div class="col-md-8">
			<input type="text" name="JNTU_no" value="<?php echo ($this->input->post('JNTU_no') ? $this->input->post('JNTU_no') : $personal_info['JNTU_no']); ?>" class="form-control" id="JNTU_no" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>