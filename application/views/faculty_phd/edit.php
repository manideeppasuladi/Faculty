<?php echo form_open('faculty_phd/edit/'.$faculty_phd['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="emp_id" class="col-md-4 control-label">Personal Info</label>
		<div class="col-md-8">
			<select name="emp_id" class="form-control">
				<option value="">select personal_info</option>
				<?php 
				foreach($all_personal_info as $personal_info)
				{
					$selected = ($personal_info['id'] == $faculty_phd['emp_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$personal_info['id'].'" '.$selected.'>'.$personal_info['emp_id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="specialisation" class="col-md-4 control-label">Specialisation</label>
		<div class="col-md-8">
			<input type="text" name="specialisation" value="<?php echo ($this->input->post('specialisation') ? $this->input->post('specialisation') : $faculty_phd['specialisation']); ?>" class="form-control" id="specialisation" />
		</div>
	</div>
	<div class="form-group">
		<label for="year" class="col-md-4 control-label">Year</label>
		<div class="col-md-8">
			<input type="text" name="year" value="<?php echo ($this->input->post('year') ? $this->input->post('year') : $faculty_phd['year']); ?>" class="form-control" id="year" />
		</div>
	</div>
	<div class="form-group">
		<label for="university_name" class="col-md-4 control-label">University Name</label>
		<div class="col-md-8">
			<input type="text" name="university_name" value="<?php echo ($this->input->post('university_name') ? $this->input->post('university_name') : $faculty_phd['university_name']); ?>" class="form-control" id="university_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="college" class="col-md-4 control-label">College</label>
		<div class="col-md-8">
			<input type="text" name="college" value="<?php echo ($this->input->post('college') ? $this->input->post('college') : $faculty_phd['college']); ?>" class="form-control" id="college" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>