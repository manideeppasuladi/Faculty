

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Emp Id</th>
		<th>Institution Name</th>
		<th>University</th>
		<th>Teaching Hours</th>
		<th>Place</th>
		<th>Actions</th>
    </tr>
	<?php foreach($faculty_experience as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['emp_id']; ?></td>
		<td><?php echo $f['institution_name']; ?></td>
		<td><?php echo $f['university']; ?></td>
		<td><?php echo $f['teaching_hours']; ?></td>
		<td><?php echo $f['place']; ?></td>
		<td>
            <a href="<?php echo site_url('faculty_experience/edit/'.$f['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('faculty_experience/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
