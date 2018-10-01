<?php 
if (isset($_POST['error'])){
	$error=$_POST['error'];
	$pesan="";

	if ($error=="variabel_belum_diset"){
		$pesan="<h3 style='color: pink' >Anda harus mengakses halaman ini dari Formulir</h3>";
	}
	if ($error=="nama_kosong"){
		$pesan="<h3 style='color: pink'>Anda harus mengisi nama</h3>";
	}
	if ($error=="nama_harus_huruf"){
		$pesan="<h3 style='color: pink'>Nama harus berupa huruf</h3>";
	}
} else{
	$error="";
}
?>

	<p style="color: pink"></p>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		
		<h1>Formulir Data Pribadi </h1>

		<?php error_reporting(0);
			echo $pesan;
			  ?>

		<form  action="prosesregis.php" method="POST" enctype="multipart/form-data">
			NIM : <input type="number"  name="nim" maxlength="10"  required ><br><br>
			Nama : <input type="text" name="nama"  minlength="1" maxlength="25" ><br><br>
			Email : <input type="text" name="email"  placeholder="Enter Valid Email Address" ><br><br>
			Jenis Kelamin :	<input type="radio" name="JenisKelamin" value="Perempuan" required>Perempuan 
					 		<input type="radio" name="JenisKelamin" value="Laki - Laki" required>Laki - Laki
					 		<br><br>
			Program Studi :
					<select name="prodi">
						<option>MBTI</option>		
						<option>Teknik Industri</option>
						<option>Fashion Design</option>
						<option>Akuntansi</option>
						<option>Ilmu Komunikasi</option>
						<option>Adminitrasi Bisnis</option>
					</select><br><br>
			Fakultas :
					<select name="fakultas">
						<option>Faklutas Industri Kreatif</option>
						<option>Fakultas Teknik Elektro</option>
						<option>Fakultas Komunikasi Bisnis</option>
						<option>Fakultas Ilmu Terapan</option>	
						<option>Fakultas Rekayasa Industri</option>
						<option>Fakultas Informatika</option>
						<option>Fakultas Ekonomi Bisnis</option>
					</select><br><br>
			Hobi :
					<input type="checkbox" name="hobi[]" value="Badminton" >Badminton
					<input type="checkbox" name="hobi[]" value="Renang">Renang
					<input type="checkbox" name="hobi[]" value="Softball">Softball
			<br><br>
			Pilih Foto :
					<input name="pict" type="file" accept="image/*"><br><br>
				
			<input type="submit" name="upload" id="upload" value="Kirim" style="width: 120px"></td>
			
	</form>
</body>
</html>
