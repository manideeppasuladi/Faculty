

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>DEPT</th>
		<th>Emp Id</th>
		<th>Email</th>
		<th>Phone No</th>
		<th>Date Of Joining</th>
		<th>PAN</th>
		<th>Aadhaar</th>
		<th>JNTU No</th>
	
    </tr>
	<?php foreach($personal_info as $p){ ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['Name']; ?></td>
		<td><?php echo $p['DEPT']; ?></td>
		<td><?php echo $p['emp_id']; ?></td>
		<td><?php echo $p['email']; ?></td>
		<td><?php echo $p['phone_no']; ?></td>
		<td><?php echo $p['date_of_joining']; ?></td>
		<td><?php echo $p['PAN']; ?></td>
		<td><?php echo $p['aadhaar']; ?></td>
		<td><?php echo $p['JNTU_no']; ?></td>
		
    </tr>
	<?php } ?>
</table>
