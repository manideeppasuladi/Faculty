

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Emp Id</th>
		<th>Tenth</th>
		<th>Tenth Year Of Study</th>
		<th>Twelve Standard</th>
		<th>Twelve Year Of Study</th>
		<th>Degree</th>
		<th>Degree Year Of Study</th>
		<th>Masters</th>
		<th>Masters Year Of Study</th>
		<th>PHD</th>
		
    </tr>
	<?php foreach($faculty_education as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['emp_id']; ?></td>
		<td><?php echo $f['Tenth']; ?></td>
		<td><?php echo $f['tenth_year_of_study']; ?></td>
		<td><?php echo $f['twelve_standard']; ?></td>
		<td><?php echo $f['twelve_year_of_study']; ?></td>
		<td><?php echo $f['degree']; ?></td>
		<td><?php echo $f['degree_year_of_study']; ?></td>
		<td><?php echo $f['masters']; ?></td>
		<td><?php echo $f['masters_year_of_study']; ?></td>
		<td><?php echo $f['PHD']; ?></td>
	
    </tr>
	<?php } ?>
</table>
