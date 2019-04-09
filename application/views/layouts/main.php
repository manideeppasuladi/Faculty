

<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
	  <header>
			<nav class="navbar navbar-expand navbar-light bg-dark navbar-dark">
				<div class="nav navbar-nav mx-auto">
				<a href="<?php echo site_url('dashboard/index2'); ?>" class="btn btn-success">HOME</a> 
					<a class="nav-item nav-link active btn btn-outline" role="button" href="<?php echo site_url('Dashboard/'); ?>">Dashboard <span class="sr-only">(current)</span></a>
					<a href="<?php echo site_url('user/user_logout'); ?>" class="btn btn-success">LogOut</a> 
				</div>
			</nav>
	  </header>
	
	<main>
		<div class="container">
		<?php if(isset($_SESSION['success'])) { ?>
                                        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
                                    <?php
                                } ?>
		<h3><?php	if(isset($heading))	echo $heading ?></h3>
		<div class="col col-lg-2">
                
             </div>    
		<?php	if(isset($_view) && $_view)
			$this->load->view($_view);
		?></div>
	</main>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>