<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Create Penghuni</title>
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
<center><H1>CREATE PENGHUNI</H1>
<br><br>
<form method="post">
 <div class="form-group">
<table border="0">
	<tr>
		<td><label for="nama"> Nama</label><br></td>
		<td><input type="text" name="nama" id="nama" class="form-control"><br></td>
	</tr>
	<tr>
		<td><label for="unit">Unit</label><br></td>
		<td><input type="text" name="unit" id="unit" class="form-control"><br></td>
	</tr>
  <tr>
    <td><label for="no_ktp">No KTP</label><br></td>
    <td><input type="text" name="no_ktp" id="no_ktp"class="form-control"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><button type="submit" class="btn btn-primary" name="submit" >Create</button></td>
  </tr>


<?php
session_start();
include'koneksi.php';
if(isset($_POST['submit'])){  
  $nama = $_POST['nama'];
  $unit=$_POST['unit'];
  $no_ktp = $_POST['no_ktp'];
  $panjangnama=strlen($_POST['nama']);
  $panjangunit=strlen($_POST['unit']);
  $panjangktp=strlen($_POST['no_ktp']);
  $cek=true;

  if(empty($nama)) {
    echo "Nama harus diisi !!<br>";
    $cek=false;
  }else {
    if($panjangnama>50){
    echo"Nama max 50 digit !!<br>";
    $cek=false;
    }
  }

   if(empty($unit)) {
    echo "Unit harus diisi !!<br>";
    $cek=false;
  }else {
    if($panjangunit>15){
    echo"Unit max 15 digit !!<br>";
    $cek=false;
    }
  }

  if(empty($no_ktp)) {
    echo "No KTP harus diisi !!<br>";
    $cek=false;
  }else {
    if($panjangktp>20){
    echo"No KTP max 20 digit !!<br>";
    $cek=false;
    }
  }


if($cek==true){
  $sql = "INSERT INTO penghuni VALUES ('$nama', '$unit', '$no_ktp')";
  $hasil = mysqli_query($konek,$sql);
      if($hasil){
        echo "berhasil";
        header('Location: createpaket.php');
      }else{
        echo "data gagal diinput";
      }
  }else{
    echo "data gagal diinput";
  }
  
}

?>