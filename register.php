<?php
	include('conn.php');
	if (isset($_POST['submitreg'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		mysqli_query($db, "INSERT INTO t_jurnal6(username, password) VALUES('$username', '$password');");
		header('Location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>REGISTRASI</h1>
	<form method="POST" action="register.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit" name="submitreg">SIGN UP</button></td>
			</tr>
		</table>
	</form>
</body>
</html>