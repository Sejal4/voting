<?php
if (!isset($_SESSION['adminLoggedin'])) {
	session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Admin Login</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">
		<h1>Class Representative Selection System </h1>
		<h2>Login to Admin Panel</h2>
		<form target="" method="post">
			<input type="text" name="username" placeholder="Username" value="">
			<br>
			<input type="password" name="pass" placeholder="Password" value="">
			<br>
			<input type="submit" name="loginbtn" value="Login">
		</form>
		<a href="index.php">Go to Home</a>
	</div>

</body>

</html>

<?php
if (isset($_POST['loginbtn'])) {
	if ($_POST['username'] == "admin" & $_POST['pass'] == 'admin') {
		echo "login Successful";
		echo "<script>alert('login Successful')</script>";
		$_SESSION['adminLoggedin'] = "ok";
		header("location: result.php");
	} else {
		echo "<script>alert('Invalid Credentials.')</script>";
	}
}
?>