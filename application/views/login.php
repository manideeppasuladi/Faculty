
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Login Registration</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <center>
  <body>
 
  <div class="row"><img style="margin : 1px 1px 1px;float : left;" height="110" width="400" src="https://anurag.edu.in/wp-content/themes/appply/images/logo.png"
</div>
</div></br>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');
 
                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
 
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
 
                        <fieldset>
                        <div class="form-group">
      <label for="sel1">Login Type</label>
      <select name="login_type" class="form-control" id="sel1">
        <option value="Director">Director</option>
        <option value="HOD">HOD</option>
        <option value="Faculty">Faculty</option>
        
      </select>
                   </br>
                  


                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                            </div>
 
 
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
 
                        </fieldset>
                        
                    </form>
              
 
                </div>
            </div>
        </div>
    </div>
</div>
 
<div class="alert alert-success center">
    <center>
<?php 
echo "Developed by Anurag Web Club";

?>
</br>
<?php 
echo "Anurag Group of Institutions";

?>
</center>
</div>
  </body>
  </center>
</html>