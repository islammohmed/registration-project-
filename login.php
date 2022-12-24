<?php include 'inc/header.php';?>
 <?php include 'inc/nav.php';?>
 <?php 
 if(isset($_SESSION['auth']))
 {
   header("location:index.php");
 } ?>
 <div class="container">
<div class="row">
<div class="col-8 mx-auto my-5">
<h2 class="border p-2 my-2 text-center">Login</h2>
 <?php 
 if(isset($_SESSION['errors'])):
 foreach($_SESSION['errors'] as $error): ?>
        <div class="alert alert-danger text-Center">
      <?php echo $error;?>
        </div>
 <?php endforeach;
  endif;
  unset($_SESSION['errors']) 
  ?>
 <form action="handlers/handellogin.php" method="POST" class="border p-3"> 
     <div calss="form-group p-2 my-1">
     <label for="email">Email</label>
     <input type="email" name="email" class="form-control" id="email">
     </div>
     <div calss="form-group p-2 my-1">
     <label for="password">password</label>
     <input type="password" name="password" class="form-control" id="password">
     </div>
     <div calss="form-group p-2 my-1">
     <input type="submit" value= "login" class="form-control"> </div>
</form>

 <?php include 'inc/footer.php';?>