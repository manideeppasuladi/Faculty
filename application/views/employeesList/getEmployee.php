<br>
<h3>Subject</h3>
<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Emp Id</th>
		<th>Subject Name</th>
		<th>Actions</th>
    </tr>
	<?php  $f =  $faculty_subject; ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['emp_id']; ?></td>
		<td><?php echo $f['subject_name']; ?></td>
		<td>
            <a href="<?php echo site_url('faculty_subject/edit/'.$f['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('faculty_subject/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php  ?>
</table>


<h3>Education</h3>
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
		<th>Actions</th>
    </tr>
	<?php  $f =  $faculty_education; ?>
    <tr>
		<td><?php echo $f[0];  ?></td>
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
		<td>
            <a href="<?php echo site_url('faculty_education/edit/'.$f['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('faculty_education/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
    <?php  ?>
</table>

<h3>PHD</h3>
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
	<?php $f =  $faculty_phd ?>
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
	<?php  ?>
</table>

<h3>Publications</h3>

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
	<?php $f  =  $faculty_publications ?>
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
	<?php ?>
</table>

<h3>Experience</h3>

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
	<?php $f = $faculty_experience ?>
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
	<?php  ?>
</table>

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