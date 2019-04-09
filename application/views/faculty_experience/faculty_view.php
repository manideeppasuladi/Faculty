

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Emp Id</th>
		<th>Specialisation</th>
		<th>Year</th>
		<th>University Name</th>
		<th>College</th>
		
    </tr>
	<?php foreach($faculty_phd as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['emp_id']; ?></td>
		<td><?php echo $f['specialisation']; ?></td>
		<td><?php echo $f['year']; ?></td>
		<td><?php echo $f['university_name']; ?></td>
		<td><?php echo $f['college']; ?></td>
		
    </tr>
	<?php } ?>
</table>
