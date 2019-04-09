

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Emp Id</th>
		<th>Subject Name</th>
		
    </tr>
	<?php foreach($faculty_subject as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['emp_id']; ?></td>
		<td><?php echo $f['subject_name']; ?></td>
		
    </tr>
	<?php } ?>
</table>
