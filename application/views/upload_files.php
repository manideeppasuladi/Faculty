<?php echo validation_errors();?>
<?php echo form_open_multipart('uploader/multiple_files');?>
<label class="btn btn-default btn-file">

10th Cerificate
<input name="image_name[]" type="file" class="form-control" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." id="input-b3"/><br />
 </label> 
  
  
 <label class="btn btn-default btn-file">

12th Cerificate
<input name="image_name[]" type="file" class="form-control" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." id="input-b3"/><br />
 </label> 
 <label class="btn btn-default btn-file">

AADHAAR CARD
<input name="image_name[]" type="file" class="form-control" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." id="input-b3"/><br />
 </label> 
 <label class="btn btn-default btn-file">

PAN CARD
<input name="image_name[]" type="file" class="form-control" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." id="input-b3"/><br />
 </label> 
 <label class="btn btn-default btn-file">

PHOTO
<input name="image_name[]" type="file" class="form-control" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." id="input-b3"/><br />
 </label> 
 <label class="btn btn-default btn-file">

DEGREE 
<input name="image_name[]" type="file" class="form-control" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." id="input-b3"/><br />
 </label> 
 <label class="btn btn-default btn-file">

MASTER's DEGREE
<input name="image_name[]" type="file" class="form-control" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." id="input-b3"/><br />
 </label> 
 <label class="btn btn-default btn-file">
PHD
<input name="image_name[]" type="file" class="form-control" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." id="input-b3"/><br />
 </label> 
<input type="submit" class="btn btn-success btn-block"/> 
<?php if(isset($_SESSION['start-adding']))
		{ 
		?>
			<div class="col-sm-4 col-sm-6 col-lg-4">
				<a href="<?php echo site_url('Faculty_experience/add/'); ?>" class="btn btn-primary">Next</a> 
			</div>
		<?php
		} 
		?>	
</form>