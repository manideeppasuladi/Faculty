
<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Emp Id</th>
		<th>Tenth</th>
		<th>Twelve Standard</th>
		
        <th>AADHAR</th>
		<th>PAN CARD</th>
		<th>Photo</th>
		
        <th>Degree</th>
		<th>Masters</th>
		
        <th>PHD</th>

    </tr>
	<?php foreach($docs_display as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['emp_id']; ?></td>

		<td>
            <a href="<?php echo site_url('./assets/'.$f['Tenth_certificate']); ?>" target="_blank" class="btn btn-info btn-xs">View</a> 
           
        </td>
		<td>
            <a href="<?php echo site_url('./assets/'.$f['tenplustwo_certificate']); ?>" target="_blank" class="btn btn-info btn-xs">View</a> 
           
        </td><td>
            <a href="<?php echo site_url('./assets/'.$f['AADHAR']); ?>" target="_blank" class="btn btn-info btn-xs">View</a> 
           
        </td><td>
            <a href="<?php echo site_url('./assets/'.$f['PAN_CARD']); ?>" target="_blank" class="btn btn-info btn-xs">View</a> 
           
        </td><td>
            <a href="<?php echo site_url('./assets/'.$f['photo']); ?>" target="_blank" class="btn btn-info btn-xs">View</a> 
           
        </td><td>
            <a href="<?php echo site_url('./assets/'.$f['DEGREE']); ?>" target="_blank" class="btn btn-info btn-xs">View</a> 
           
        </td><td>
            <a href="<?php echo site_url('./assets/'.$f['MASTERS']); ?>" target="_blank" class="btn btn-info btn-xs">View</a> 
           
        </td><td>
            <a href="<?php echo site_url('./assets/'.$f['PHD']); ?>" target="_blank" class="btn btn-info btn-xs">View</a> 
           
        </td>
	
    </tr>
	<?php } ?>
</table>
