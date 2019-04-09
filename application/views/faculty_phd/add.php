<?php echo form_open('faculty_phd/add',array("class"=>"form-horizontal")); ?>

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
		<label for="specialisation" class="col-md-4 control-label">Specialisation</label>
		<div class="col-md-8">
			<input type="text" name="specialisation" value="<?php echo $this->input->post('specialisation'); ?>" class="form-control" id="specialisation" />
		</div>
	</div>
	<div class="form-group">
		<label for="year" class="col-md-4 control-label">Year</label>
		<div class="col-md-8">
			<input type="text" name="year" value="<?php echo $this->input->post('year'); ?>" class="form-control" id="year" />
		</div>
	</div>
	<div class="form-group">
		<label for="university_name" class="col-md-4 control-label">University Name</label>
		<div class="col-md-8">
			<input type="text" name="university_name" value="<?php echo $this->input->post('university_name'); ?>" class="form-control" id="university_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="college" class="col-md-4 control-label">College</label>
		<div class="col-md-8">
			<input type="text" name="college" value="<?php echo $this->input->post('college'); ?>" class="form-control" id="college" />
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
				<a href="<?php echo site_url('Faculty_publication/add/'); ?>" class="btn btn-primary">Next</a> 
			</div>
		<?php
		} 
		?>	
		
	</div>

<?php echo form_close(); ?>