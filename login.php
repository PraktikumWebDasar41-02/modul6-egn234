<?php
	include('conn.php');

	if (isset($_POST['submitlog'])) {
		$usern = $_POST['username']; 
		$passw = md5($_POST['password']); 

		$result = mysqli_query($db, "SELECT * FROM t_jurnal6 where username = '$usern'");
		if (!$result) {
			echo "username Salah";
		}
		// else{
			$row = mysqli_fetch_assoc($result);
			// echo $row['password'];
			if ($passw == $row['password']) {
				session_start();
				$_SESSION['usrnm'] = $usern;
				header('Location: formulir.php');
			}else{
				echo "password salah";
			}
		// }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>LOGIN</h1>
	<form method="POST" action="login.php">
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
				<td colspan="3"><button type="submit" name="submitlog">SIGN IN</button></td>
			</tr>
		</table>
	</form>

</body>
</html>