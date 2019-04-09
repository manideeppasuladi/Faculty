<?php echo form_open('faculty_publication/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="emp_id" class="col-md-4 control-label">Personal Info</label>
		
		<?php
			if(isset($_SESSION['empId']))
			{
		?>
			<div class="col-md-8">
				<input  class="form-control" name="emp_id" type="text" value="<?php echo $_SESSION['empId']?>" readonly="readonly"	/>
			</div>
		<?php
			} else {
		?>
				<div class="col-md-8">
					<select name="emp_id" class="form-control">
						<option value="">select personal_info</option>
						<?php 
						foreach($all_personal_info as $personal_info)
						{
							$selected = ($personal_info['id'] == $this->input->post('emp_id')) ? ' selected="selected"' : "";

							echo '<option value="'.$personal_info['id'].'" '.$selected.'>'.$personal_info['emp_id'].'</option>';
						} 
						?>
					</select>
				</div>
		<?php
			}
		?>
	</div>
	<div class="form-group">
		<label for="date_of_publication" class="col-md-4 control-label">Date Of Publication</label>
		<div class="col-md-8">
			<input type="text" name="date_of_publication" value="<?php echo $this->input->post('date_of_publication'); ?>" class="form-control" id="date_of_publication" />
		</div>
	</div>
	<div class="form-group">
		<label for="validation" class="col-md-4 control-label">Validation</label>
		<div class="col-md-8">
			<input type="text" name="validation" value="<?php echo $this->input->post('validation'); ?>" class="form-control" id="validation" />
		</div>
	</div>
	<div class="form-group">
		<label for="page" class="col-md-4 control-label">Page</label>
		<div class="col-md-8">
			<input type="text" name="page" value="<?php echo $this->input->post('page'); ?>" class="form-control" id="page" />
		</div>
	</div>
	<div class="form-group">
		<label for="international_name" class="col-md-4 control-label">International Name</label>
		<div class="col-md-8">
			<input type="text" name="international_name" value="<?php echo $this->input->post('international_name'); ?>" class="form-control" id="international_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="index_name" class="col-md-4 control-label">Index Name</label>
		<div class="col-md-8">
			<input type="text" name="index_name" value="<?php echo $this->input->post('index_name'); ?>" class="form-control" id="index_name" />
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
				<a href="<?php echo site_url('Faculty_experience/add/'); ?>" class="btn btn-primary">Next</a> 
			</div>
		<?php
		} 
		?>	
		
	</div>
<?php echo form_close(); ?>