<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php
  include("database.php");
  extract($_POST);

  if(isset($submit))
  {
    $rs=mysqli_query($connection,"SELECT * FROM users WHERE `rollnumber`='$rollnumber' AND `password`='$password'");
    if(mysqli_num_rows($rs)<1)
    {
      $found="N";
    }
    else
    {
      $_SESSION['rollnumber']=$rollnumber;
    }
  }
  if(isset($_SESSION['rollnumber']))
  {
    
    header("Location: welcome.php");   
    
    exit;
  }
  ?>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Roll Number</h5>
           		   		<input type="text" class="input" name="rollnumber">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
              <?php
                if(isset($found))
                {
                  echo '<h4 class="text-center bg-warning"><span style="color:red;text-align:center;">Invalid Roll Number or PASSWORD</span></h4>';
                }
              ?>
            	
            	<input class="btn" type="submit" name="submit" id="submit" value="Login"/>
              <a href="#">Forgot Password?</a>
              <a href="registration.php">New User?</a>



            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>