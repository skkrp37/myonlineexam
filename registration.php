<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div>
		<form action="config.php" method="POST">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-3">
						<h1>Registration</h1>
						<p>Fill up the form with correct value.</p>
						<hr class="mb-3">
						<label for="firstname"><b>First Name</b></label>
						<input class="form-control" type="text" name="firstname" required>
						
						<label for="lastname"><b>Last Name</b></label>
						<input class="form-control" type="text" name="lastname" required>

						<label for="rollnumber"><b>Roll Number</b></label>
						<input class="form-control" type="number" name="rollnumber" required>
						
						<label for="email"><b>Email ID</b></label>
						<input class="form-control" type="email" name="email" required>

						<label for="phonenumber"><b>Phone Number</b></label>
						<input class="form-control" type="number" name="phonenumber" required>
						
						<label for="password"><b>Password</b></label>
						<input class="form-control" type="password" name="password" required>
						<hr class="mb-3">
						<input class="btn btn-success" type="submit" name="create" value="Sign Up">
					</div>
				</div>
			</div>
		</form>
	</div>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
</script>-->





</body>
</html>