<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Create Paket</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<div class="position-relative">
<div class="float-lg-center">
<div class="p-3 mb-2 bg-secondary text-white">
<center><H1>CREATE PAKET</H1>
<br><br>

<form method="post">
 <div class="form-group">
<table border="0">
	<tr>
		<td><label for="tgl_datang">Tanggal Datang</label><br></td>
		<td><input type="date" name="tgl_datang" id="tgl_datang" class="form-control"><br></td>
	</tr>
	<tr>
		<td><label for="no_ktp">Sasaran Paket</label><br></td>
		<td><input type="text" name="no_ktp" id="no_ktp" class="form-control"><br></td>
	</tr>
	<tr>
		<td><label for="nip"> Penerima</label><br></td>
		<td><input type="text" name="nip" id="nip" class="form-control"><br></td>
	</tr>
	<tr>
		<td><label for="isi"> Isi Paket</label><br></td>
		<td><input type="text" name="isi" id="isi" class="form-control"><br></td>
	</tr>
	<tr>
		<td><label for="tgl_diambil">Tanggal diambil</label><br></td>
		<td><input type="date" name="tgl_diambil" id="tgl_diambil" class="form-control"><br></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><button type="submit" class="btn btn-primary" name="submit" >Create</button></td>
	</tr>
</table>
 </div>

<?php
session_start();
include'koneksi.php';
if(isset($_POST['submit'])){	
	$tgl_datang = $_POST['tgl_datang'];
	$no_ktp=$_POST['no_ktp'];
	$isi = $_POST['isi'];
	$tgl_diambil = $_POST['tgl_diambil'];
	
if($cek==true){
	$sql = "INSERT INTO paket VALUES ('tgl_datang', 'no_ktp', 'isi', 'tgl_diambil')";
	$hasil = mysqli_query($konek,$sql);
			if($hasil){
				echo "berhasil";
				header('Location: listpaket.php');
			}else{
				echo "data gagal diinput";
			}
	}else{
		echo "data gagal diinput";
	}
	
}

?>
<br><br>


</form>
</center>
</div>
</div>
</div>