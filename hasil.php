<?php
	include('conn.php');
	session_start();
	$usr = $_SESSION['usrnm'];

	$result = mysqli_query($db, "SELECT * FROM t_jurnal6 WHERE username = '$usr'");
	$row = mysqli_fetch_array($result);

	echo "Nama: ";
	printf("%s", $row['nama']);
	echo "<br>";
	echo "nim: ";
	printf("%s", $row['nim']);
	echo "<br>";
	echo "kelas: ";
	printf("%s", $row['kelas']);
	echo "<br>";
	echo "jenis kelamin: ";
	printf("%s", $row['jk']);
	echo "<br>";
	echo "Hobby: ";
	printf("%s", $row['hobi']);
	echo "<br>";
	echo "fakultas: ";
	printf("%s", $row['fakultas']);
	echo "<br>";
	echo "alamat: ";
	printf("%s", $row['alamat']);
	echo "<br>";
	
	if (isset($_POST['reset'])) {
		session_destroy();
		header('Location: register.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="hasil.php" method='POST'>
		<button type="submit" name="reset">EXIT</button>
	</form>
</body>
</html>
