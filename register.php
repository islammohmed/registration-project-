<?php include 'inc/header.php';?>
 <?php include 'inc/nav.php';?>

<div class="container">
<div class="row">
<div class="col-8 mx-auto my-5">
<h2 class="border p-2 my-2 text-center">Register</h2>
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
 <form action="handlers/handelregister.php" method="POST" class="border p-3"> 
  <div class="form-group p2 my-1">
    <label for="name" >name</label>
    <input type="text" name="name" class="form-control" id="name" >
    </div>
     <div calss="form-group p-2 my-1">
     <label for="email">Email</label>
     <input type="email" name="email" class="form-control" id="email">
     </div>
     <div calss="form-group p-2 my-1">
     <label for="password">password</label>
     <input type="password" name="password" class="form-control" id="password">
     </div>
     <div calss="form-group p-2 my-1">
     <input type="submit" value= "register" class="form-control"> </div>
</form>
    
 <?php include 'inc/footer.php';?>