<div class="pull-right">
	<a href="<?php echo site_url('faculty_phd/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Emp Id</th>
		<th>Specialisation</th>
		<th>Year</th>
		<th>University Name</th>
		<th>College</th>
		<th>Actions</th>
    </tr>
	<?php foreach($faculty_phd as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['emp_id']; ?></td>
		<td><?php echo $f['specialisation']; ?></td>
		<td><?php echo $f['year']; ?></td>
		<td><?php echo $f['university_name']; ?></td>
		<td><?php echo $f['college']; ?></td>
		<td>
            <a href="<?php echo site_url('faculty_phd/edit/'.$f['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('faculty_phd/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
