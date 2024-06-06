<?php

include('../../libs/db_connect.php');

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: ../students/dashboard.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$role = $_POST['role'];

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND role='$role'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['role'] = $row['role'];

		if ($_SESSION['role'] == 'student') {
			header("Location: ../students/dashboard.php");
		} elseif ($_SESSION['role'] == 'teacher') {
			header("Location: ../lecturers/dashboard.php");
		} else {
			header("Location: ../admin/dashboard.php");
		}
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<label for="" style="font-weight: 500;">Select User Type</label>
				<select name="role" id="" class="user-select">
					<option selected value="student">Student</option>
					<option value="teacher">Teacher</option>
					<option value="admin">Admin</option>
				</select>
			</div>
			<!-- <div class="Entry-details">
				<span class="Entry-title">Entry</span>
				<div class="category">
					<label for="">
						<span class="dot one"></span>
						<span class="enter">ADMIN</span>
					</label>
					<label for="">
						<span class="dot one"></span>
						<span class="enter">TEACHER</span>
					</label>
					<label for="">
						<span class="dot one"></span>
						<span class="enter">STUDENT</span>
					</label>
				</div>
			</div> -->
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>

</html>