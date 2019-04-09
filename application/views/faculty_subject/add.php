<?php echo form_open('faculty_subject/add',array("class"=>"form-horizontal")); ?>

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
		<label for="subject_name" class="col-md-4 control-label">Subject Name</label>
		<div class="col-md-8">
			<input type="text" name="subject_name" value="<?php echo $this->input->post('subject_name'); ?>" class="form-control" id="subject_name" />
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
				<a href="<?php echo site_url('Faculty_phd/add/'); ?>" class="btn btn-primary">Next</a> 
			</div>
		<?php
		} 
		?>	
		
	</div>

<?php echo form_close(); ?>