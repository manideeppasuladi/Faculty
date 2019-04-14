<?php echo form_open('personal_info/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo $this->input->post('Name'); ?>" class="form-control" id="Name" />
		</div>
	</div>
	
	<div class="form-group">
      <label class="col-md-4 control-label">DEPARTMENT</label>
	  <div class="col-md-8">
      <select name="DEPT" class="form-control col-md-4" id="sel1">
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="EEE">EEE</option>
		<option value="CHEM">CHEMICAL</option>
        <option value="MECH">MECHANICAL</option>
        <option value="CIVIL">CIVIL</option>
		<option value="MBA">MBA</option>
        <option value="PHARMACY">PHARMACY</option>
      </select>
	  </div>
	<div class="form-group">
		<label for="emp_id" class="col-md-4 control-label">Emp Id</label>
		<div class="col-md-8">
			<input type="text" name="emp_id" value="<?php echo $this->input->post('emp_id'); ?>" class="form-control" id="emp_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="phone_no" class="col-md-4 control-label">Phone No</label>
		<div class="col-md-8">
			<input type="text" name="phone_no" value="<?php echo $this->input->post('phone_no'); ?>" class="form-control" id="phone_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="date_of_joining" class="col-md-4 control-label">Date Of Joining</label>
		<div class="col-md-8">
			<input type="date" name="date_of_joining" value="<?php echo $this->input->post('date_of_joining'); ?>" class="form-control" id="date_of_joining" />
		</div>
	</div>
	<div class="form-group">
		<label for="PAN" class="col-md-4 control-label">PAN</label>
		<div class="col-md-8">
			<input type="text" name="PAN" value="<?php echo $this->input->post('PAN'); ?>" class="form-control" id="PAN" />
		</div>
	</div>
	<div class="form-group">
		<label for="aadhaar" class="col-md-4 control-label">Aadhaar</label>
		<div class="col-md-8">
			<input type="text" name="aadhaar" value="<?php echo $this->input->post('aadhaar'); ?>" class="form-control" id="aadhaar" />
		</div>
	</div>
	<div class="form-group">
		<label for="JNTU_no" class="col-md-4 control-label">JNTU No</label>
		<div class="col-md-8">
			<input type="text" name="JNTU_no" value="<?php echo $this->input->post('JNTU_no'); ?>" class="form-control" id="JNTU_no" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-4 col-sm-6 col-lg-4">
			<button type="submit" class="btn btn-success">Save</button>
		</div>
		<?php if(isset($_SESSION['start-adding']))
		{ 
		?>
			<div class="col-sm-4 col-sm-6 col-lg-4">
				<a href="<?php echo site_url('Faculty_education/add/'); ?>" class="btn btn-primary">Next</a> 
			</div>
		<?php
		} 
		?>	
		
	</div>
	
	
<?php echo form_close(); ?>