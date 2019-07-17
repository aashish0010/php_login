<!DOCTYPE html>
<html>
<head>
	<title>User Login And Registration</title>
	<link rel="stylesheet" href="styles.css">


	<link rel ="stylesheet" type="text/css"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login Here</h2>
			<form action="validation.php"method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user"class="form-control"required>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password"class="form-control"required>
				</div>

				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>
		</div>

<!--Registration form -->

	<div class="col-md-6 login-right">
			<h2>Register Here</h2>
			<form action="Registration.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user"class="form-control"required>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password"class="form-control"required>
				</div>

				<button type="submit"name="Register"class="btn btn-primary">Register</button>
			</form>
		</div>

		</div>
</body>
</html>