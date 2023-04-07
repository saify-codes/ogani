<?php
session_start();
require 'db/userModel.php';

if (isset($_SESSION['logged_in']))
	header("location: index.php");

if (isset($_COOKIE['email'])) {
	print_r($_COOKIE);
	$user = User::getUser($_COOKIE['email']);
	$_SESSION['logged_in'] = $user;
	header("location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$user = new User(email: $email, pass: $pass);
	if ($user->exists()) {
		if (isset($_POST['remember'])) {
			setcookie('email', $email, time() + 86400 * 30);
		}
		$_SESSION['logged_in'] = User::getUser($email);
		header("location: index.php");
	} else {
		$error_msg = "Invalid email or password!";
	}
}
?>
<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
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
						<h3 class="text-center mb-4"><a href="register.php">Create an account!</a></h3>
						<form class="login-form" method="POST">
							<div class="form-group">
								<input type="email" name="email" class="form-control rounded-left" placeholder="Email" required>
							</div>
							<div class="form-group d-flex">
								<input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" name="remember" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" name="submit" value="submit" class="btn btn-primary rounded submit p-3">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>