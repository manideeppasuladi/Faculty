<div class="pull-right">
	<a href="<?php echo site_url('faculty_subject/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Emp Id</th>
		<th>Subject Name</th>
		<th>Actions</th>
    </tr>
	<?php foreach($faculty_subject as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['emp_id']; ?></td>
		<td><?php echo $f['subject_name']; ?></td>
		<td>
            <a href="<?php echo site_url('faculty_subject/edit/'.$f['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('faculty_subject/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
