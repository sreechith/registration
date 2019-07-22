<?php
    include_once('header.php');
?>

<form action="" style="max-width:500px;margin:auto" method="post">
  <h2>Login Form</h2>
  
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email"   id="email"  value="">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" id="password"  value="">
  </div>

  <button type="submit" class="btn" id="login" name="submit">Login In</button>

  <div class="input-container">
    <label>Not Have An Account ?</label> <a href="index.php?type=Signup">Register here</a>
  </div>
  <?php if(isset($_GET['message'])){ ?>
  <div class="input-container">
    <label class="err"><?php echo $_GET['message']  ?></label>
  </div>
  <?php } ?>
</form>
