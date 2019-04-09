<?php echo form_open('faculty_experience/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="emp_id" class="col-md-4 control-label">Personal Info</label>
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
	</div>
	<div class="form-group">
		<label for="institution_name" class="col-md-4 control-label">Institution Name</label>
		<div class="col-md-8">
			<input type="text" name="institution_name" value="<?php echo $this->input->post('institution_name'); ?>" class="form-control" id="institution_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="university" class="col-md-4 control-label">University</label>
		<div class="col-md-8">
			<input type="text" name="university" value="<?php echo $this->input->post('university'); ?>" class="form-control" id="university" />
		</div>
	</div>
	<div class="form-group">
		<label for="teaching_hours" class="col-md-4 control-label">Teaching Hours</label>
		<div class="col-md-8">
			<input type="text" name="teaching_hours" value="<?php echo $this->input->post('teaching_hours'); ?>" class="form-control" id="teaching_hours" />
		</div>
	</div>
	<div class="form-group">
		<label for="place" class="col-md-4 control-label">Place</label>
		<div class="col-md-8">
			<input type="text" name="place" value="<?php echo $this->input->post('place'); ?>" class="form-control" id="place" />
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
				<a href="<?php echo site_url('Dashboard/logout'); ?>" class="btn btn-primary">Done</a> 
			</div>
		<?php
		} 
		?>	
		
	</div>

<?php echo form_close(); ?>