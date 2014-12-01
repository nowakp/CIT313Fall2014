<?php include('elements/header.php');?>
<?php require_once('application/config.php');?>

<div class="container">

<div class="page-header">
    
   <h1>Login</h1>
   
   <?php if(isset($error)) { ?>
   
        <div class="alert alert-danger">
            <?php echo $error;?>
        </div>
        <?php
   }
   ?>
   <?php include('elements/login_form.php');?>
   
  </div>
</div>
<?php include('elements/footer.php');?>

