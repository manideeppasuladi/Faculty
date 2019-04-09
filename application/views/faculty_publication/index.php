<div class="pull-right">
	<a href="<?php echo site_url('faculty_publication/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Emp Id</th>
		<th>Date Of Publication</th>
		<th>Validation</th>
		<th>Page</th>
		<th>International Name</th>
		<th>Index Name</th>
		<th>Actions</th>
    </tr>
	<?php foreach($faculty_publications as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['emp_id']; ?></td>
		<td><?php echo $f['date_of_publication']; ?></td>
		<td><?php echo $f['validation']; ?></td>
		<td><?php echo $f['page']; ?></td>
		<td><?php echo $f['international_name']; ?></td>
		<td><?php echo $f['index_name']; ?></td>
		<td>
            <a href="<?php echo site_url('faculty_publication/edit/'.$f['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('faculty_publication/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
