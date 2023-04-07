<?php
session_start();
require 'db/userModel.php';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$user = new User($email, $pass, $name,);
	if ($user->create()) {
		header("location:login.php");
	} else {
		$error_msg = "User already exists!";
	}
}
?>
<!doctype html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<?php if (isset($error_msg)) { ?>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-5">
						<div class="alert alert-danger text-center">
							<strong><?php echo $error_msg ?></strong>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="fa fa-user-o"></span>
						</div>
						<h3 class="text-center mb-4">Registration</h3>
						<form class="login-form" method="POST">
							<div class="form-group">
								<input type="text" name="name" class="form-control rounded-left" placeholder="Name" minlength="4" required>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control rounded-left" placeholder="Email" required>
							</div>
							<div class="form-group d-flex">
								<input type="password" name="password" class="form-control rounded-left" placeholder="Password" minlength="8" required>
							</div>
							<div class="form-group">
								<button type="submit" name="submit" value="submit" class="btn btn-primary rounded submit p-3">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>