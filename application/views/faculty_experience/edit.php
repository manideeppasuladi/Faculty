<?php echo form_open('faculty_experience/edit/'.$faculty_experience['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="emp_id" class="col-md-4 control-label">Personal Info</label>
		<div class="col-md-8">
			<select name="emp_id" class="form-control">
				<option value="">select personal_info</option>
				<?php 
				foreach($all_personal_info as $personal_info)
				{
					$selected = ($personal_info['id'] == $faculty_experience['emp_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$personal_info['id'].'" '.$selected.'>'.$personal_info['emp_id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="institution_name" class="col-md-4 control-label">Institution Name</label>
		<div class="col-md-8">
			<input type="text" name="institution_name" value="<?php echo ($this->input->post('institution_name') ? $this->input->post('institution_name') : $faculty_experience['institution_name']); ?>" class="form-control" id="institution_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="university" class="col-md-4 control-label">University</label>
		<div class="col-md-8">
			<input type="text" name="university" value="<?php echo ($this->input->post('university') ? $this->input->post('university') : $faculty_experience['university']); ?>" class="form-control" id="university" />
		</div>
	</div>
	<div class="form-group">
		<label for="teaching_hours" class="col-md-4 control-label">Teaching Hours</label>
		<div class="col-md-8">
			<input type="text" name="teaching_hours" value="<?php echo ($this->input->post('teaching_hours') ? $this->input->post('teaching_hours') : $faculty_experience['teaching_hours']); ?>" class="form-control" id="teaching_hours" />
		</div>
	</div>
	<div class="form-group">
		<label for="place" class="col-md-4 control-label">Place</label>
		<div class="col-md-8">
			<input type="text" name="place" value="<?php echo ($this->input->post('place') ? $this->input->post('place') : $faculty_experience['place']); ?>" class="form-control" id="place" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>