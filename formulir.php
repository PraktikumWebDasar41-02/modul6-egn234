<?php
	include('conn.php');
	session_start();
	$user = $_SESSION['usrnm'];

	// $result = mysqli_query($db, "");

	if (isset($_POST['edit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$jk = $_POST['jk'];
		$hobi = $_POST['hobi'];
		$fakultas = $_POST['fakultas'];
		$alamat = $_POST['alamat'];
		$hobby = "";
		
		if (!empty($hobi)) {
			foreach ($hobi as $value) {
				$hobby .= $value.", ";
			}
		}

		$cek = true;

		if (strlen($nama)>35) {
			echo "nama terlalu panjang";
			$cek = false;
		}

		if (strlen($nim)>10 || strlen($nim)<10) {
			echo "NIM harus 10 digit";
			$cek = false;
		}

		if(!is_numeric($nim)){
			echo "NIM harus numerik";
			$cek = false;
		}

		if ($cek) {
			$inp = mysqli_query($db, "UPDATE t_jurnal6 SET nama = '$nama', nim = '$nim', kelas = '$kelas', jk = '$jk', hobi = '$hobby', fakultas = '$fakultas', alamat = '$alamat' WHERE username = '$user';");
			if (!$inp) {
				
			}
			else{
				header('Location: hasil.php');
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Selamat Datang, <?php echo $user; ?></h1>
	<form method="POST" action="formulir.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr><tr>
				<td>kelas</td>
				<td>:</td>
				<td>
					<input type="radio" name="kelas" value="D3MI01" checked>D3MI01
					<input type="radio" name="kelas" value="D3MI02">D3MI02
					<input type="radio" name="kelas" value="D3MI03">D3MI03
					<input type="radio" name="kelas" value="D3MI04">D3MI04
				</td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="Laki-Laki" checked>Laki-Laki<br>
					<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi[]" value="Membaca">Membaca
					<input type="checkbox" name="hobi[]" value="Main Game">Main Game
					<input type="checkbox" name="hobi[]" value="Nonton Film">Nonton Film<br>
					<input type="checkbox" name="hobi[]" value="Sepakbola">Sepakbola
					<input type="checkbox" name="hobi[]" value="Jalan Kaki">Jalan Kaki
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<option value="FIT">FIT</option>
						<option value="FTE">FTE</option>
						<option value="FIK">FIK</option>
						<option value="FEB">FEB</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit" name="edit">SUBMIT</button></td>
			</tr>
		</table>
	</form>	
</body>
</html>