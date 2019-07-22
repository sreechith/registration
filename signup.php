<?php
    include_once('header.php');
?>

<form action="" style="max-width:500px;margin:auto" method="post">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="First name" name="first_name" id="firstname" value="">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Last name" name="last_name" id="lastname"  value=""">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email"   id="email"  value="">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" id="password"  value="">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword"  value="">
  </div>

  <div class="input-container">
    <i class="fa fa-calendar icon"></i>
    <input class="input-field" type="date" placeholder="D.O.B" name="dob"   id="dob"  value="">
  </div>

  <button type="submit" class="btn" id ="signup" name="submit">Sign Up</button>

  <div class="input-container">
    <p>Already Exist User->  <a href="index.php">   click here</a></p>
  </div>
  <?php if(isset($_GET['message'])){ ?>
  <div class="input-container">
    <label class="err"><?php echo $_GET['message']  ?></label>
  </div>
  <?php } ?>
</form>
<?php
    include_once('footer.php');
?>