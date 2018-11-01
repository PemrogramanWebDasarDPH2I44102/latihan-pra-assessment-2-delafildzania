<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Dashboard</title>
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
<center><H1>DASHBOARD</H1>

<?php
require 'function.php';
$d=query("SELECT * FROM paket");

if (isset($_POST['cari'])){
	$d = cari($_POST['keyword']);
}	
?> 

<form method="post">

<input type="text" name="keyword" placeholder="Masukkan no ktp" size="30" autofocus autocomplete="off">	
<input type="submit" name="cari" value="Cari">
<br><br>
<table class="table">
	<thead  class="thead-light">
	<tr>
		<th scope="col">Tanggal Datang</th>
		<th scope="col">No KTP</th>
		<th scope="col">NIP</th>
		<th scope="col">Isi</th>
		<th scope="col">Tanggal diambil</th>
	</tr>
	</thead>
	<?php foreach($d as $row ) :?>
	<tbody>
	<tr>
		<th scope="row"><?= $row["nim"]; ?></th>
		<td><?= $row["tgl_datang"]; ?></td>
		<td><?= $row["no_ktp"]; ?></td>
		<td><?= $row["nip"]; ?></td>
		<td><?= $row["isi"]; ?></td>
		<td><?= $row["tgl_diambil"]; ?></td>
	</tr>
	</tbody>
<?php endforeach; ?>
</table>
</form>
</center>
</div>
</div>
</div>
