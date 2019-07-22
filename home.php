<?php
    include_once('header.php');
?>
        <h2 style="text-align:center">User Profile Card</h2>

        <div class="card">
        
        <h1><?php echo $_SESSION['first_name'];?></h1>
        <p class="title"><?php echo $_SESSION['email'];?></p>
        <p><?php echo $_SESSION['dob'];?></p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a> 
            <a href="#"><i class="fa fa-twitter"></i></a>  
            <a href="#"><i class="fa fa-linkedin"></i></a>  
            <a href="#"><i class="fa fa-facebook"></i></a> 
        </div>
        <p>
            <i class="fa fa-sign-out icon"></i>
        </div>
<?php
    include_once('footer.php');
?>