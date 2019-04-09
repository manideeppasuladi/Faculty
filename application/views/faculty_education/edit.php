<?php echo form_open('faculty_education/edit/'.$faculty_education['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="emp_id" class="col-md-4 control-label">Personal Info</label>
		<div class="col-md-8">
			<select name="emp_id" class="form-control">
				<option value="">select personal_info</option>
				<?php 
				foreach($all_personal_info as $personal_info)
				{
					$selected = ($personal_info['id'] == $faculty_education['emp_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$personal_info['id'].'" '.$selected.'>'.$personal_info['emp_id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Tenth" class="col-md-4 control-label">Tenth</label>
		<div class="col-md-8">
			<input type="text" name="Tenth" value="<?php echo ($this->input->post('Tenth') ? $this->input->post('Tenth') : $faculty_education['Tenth']); ?>" class="form-control" id="Tenth" />
		</div>
	</div>
	<div class="form-group">
		<label for="tenth_year_of_study" class="col-md-4 control-label">Tenth Year Of Study</label>
		<div class="col-md-8">
			<input type="text" name="tenth_year_of_study" value="<?php echo ($this->input->post('tenth_year_of_study') ? $this->input->post('tenth_year_of_study') : $faculty_education['tenth_year_of_study']); ?>" class="form-control" id="tenth_year_of_study" />
		</div>
	</div>
	<div class="form-group">
		<label for="twelve_standard" class="col-md-4 control-label">Twelve Standard</label>
		<div class="col-md-8">
			<input type="text" name="twelve_standard" value="<?php echo ($this->input->post('twelve_standard') ? $this->input->post('twelve_standard') : $faculty_education['twelve_standard']); ?>" class="form-control" id="twelve_standard" />
		</div>
	</div>
	<div class="form-group">
		<label for="twelve_year_of_study" class="col-md-4 control-label">Twelve Year Of Study</label>
		<div class="col-md-8">
			<input type="text" name="twelve_year_of_study" value="<?php echo ($this->input->post('twelve_year_of_study') ? $this->input->post('twelve_year_of_study') : $faculty_education['twelve_year_of_study']); ?>" class="form-control" id="twelve_year_of_study" />
		</div>
	</div>
	<div class="form-group">
		<label for="degree" class="col-md-4 control-label">Degree</label>
		<div class="col-md-8">
			<input type="text" name="degree" value="<?php echo ($this->input->post('degree') ? $this->input->post('degree') : $faculty_education['degree']); ?>" class="form-control" id="degree" />
		</div>
	</div>
	<div class="form-group">
		<label for="degree_year_of_study" class="col-md-4 control-label">Degree Year Of Study</label>
		<div class="col-md-8">
			<input type="text" name="degree_year_of_study" value="<?php echo ($this->input->post('degree_year_of_study') ? $this->input->post('degree_year_of_study') : $faculty_education['degree_year_of_study']); ?>" class="form-control" id="degree_year_of_study" />
		</div>
	</div>
	<div class="form-group">
		<label for="masters" class="col-md-4 control-label">Masters</label>
		<div class="col-md-8">
			<input type="text" name="masters" value="<?php echo ($this->input->post('masters') ? $this->input->post('masters') : $faculty_education['masters']); ?>" class="form-control" id="masters" />
		</div>
	</div>
	<div class="form-group">
		<label for="masters_year_of_study" class="col-md-4 control-label">Masters Year Of Study</label>
		<div class="col-md-8">
			<input type="text" name="masters_year_of_study" value="<?php echo ($this->input->post('masters_year_of_study') ? $this->input->post('masters_year_of_study') : $faculty_education['masters_year_of_study']); ?>" class="form-control" id="masters_year_of_study" />
		</div>
	</div>
	<div class="form-group">
		<label for="PHD" class="col-md-4 control-label">PHD</label>
		<div class="col-md-8">
			<input type="text" name="PHD" value="<?php echo ($this->input->post('PHD') ? $this->input->post('PHD') : $faculty_education['PHD']); ?>" class="form-control" id="PHD" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>