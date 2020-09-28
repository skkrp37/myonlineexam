<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<?php
extract($_POST);
include("database.php");
$rs=mysqli_query($connection,"SELECT * FROM users WHERE `rollnumber`='$rollnumber'");
if(mysqli_num_rows($rs)>0)
{
	echo '<center><div class="card text-center" style="width: 28rem;">
  <div class="card-header">
  	<img class="card-img-top" src="img/error1.svg" height="100" alt="Card image cap">
    
  </div>
  <div class="card-body">
    <h3 class="alert alert-danger">ERROR!!</h3>
    <p class="card-text"><h5>Roll Number already Registered</h5></p>
    <a href="registration.php" class="btn btn-primary">Go Back</a>
    <a class="btn btn-success" href="index.php" role="button">Login</a>
  </div>
</div></center>';
	exit;
}
//mysqli_select_db($connection,'useraccounts');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$rollnumber=$_POST['rollnumber'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];

$query="INSERT INTO `users` (`id`, `firstname`, `lastname`, `rollnumber`, `email`, `phonenumber`, `password`) VALUES (NULL, '$firstname', '$lastname', '$rollnumber', '$email','$phonenumber','$password') ";

$rs=mysqli_query($connection, $query)or die("Could Not Perform the Query");
echo '<center><div class="card text-center" style="width: 28rem;">
  <div class="card-header">
  	<img class="card-img-top" src="img/done.svg" height="100" alt="Card image cap">
    
  </div>
  <div class="card-body">
    <h3 class="alert alert-success">Success!!</h3>
    <p class="card-text"><h5>Go Back to Login Page and Login Using your Roll Number</h5></p>
    <a class="btn btn-success" href="index.php" role="button">Login</a>
  </div>
</div></center>';


?>

<!--<!DOCTYPE html>
<html>
<head>
	<title>Go to login page</title>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
	$(function(){
		//alert('hello.');
		Swal.fire(
  			'Good job!',
  			'You clicked the button!',
  			'success'
		)
	});
</script>


</body>
</html>-->
</body>
</html>
