<?php echo form_open('faculty_subject/edit/'.$faculty_subject['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="emp_id" class="col-md-4 control-label">Personal Info</label>
		<div class="col-md-8">
			<select name="emp_id" class="form-control">
				<option value="">select personal_info</option>
				<?php 
				foreach($all_personal_info as $personal_info)
				{
					$selected = ($personal_info['id'] == $faculty_subject['emp_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$personal_info['id'].'" '.$selected.'>'.$personal_info['emp_id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="subject_name" class="col-md-4 control-label">Subject Name</label>
		<div class="col-md-8">
			<input type="text" name="subject_name" value="<?php echo ($this->input->post('subject_name') ? $this->input->post('subject_name') : $faculty_subject['subject_name']); ?>" class="form-control" id="subject_name" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>