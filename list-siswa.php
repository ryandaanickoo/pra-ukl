<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Inventaris Moklet</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style-list.css">
</head>

<body>
	<header class="asem">
		<h2 class="asem">Inventaris Moklet</h2>
	</header>
	<a href="form-daftar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">TAMBAH BARU</a>
	<table class="table">
	<div id="background">
		<thead>
			<tr class="table-info">
				<th>Nama</th>
				<th>Merek</th>
				<th>Jumlah</th>
				<th>Kondisi</th>
			</tr>
		</thead>
</div>
		<tbody>	
			<?php
			$sql = "SELECT * FROM barang";
			$query = mysqli_query($db, $sql);

			while($siswa = mysqli_fetch_array($query)){
				echo "<tr>";

				echo "<td>".$siswa['nama']."</td>";
				echo "<td>".$siswa['merek']."</td>";
				echo "<td>".$siswa['jumlah']."</td>";
				echo "<td>".$siswa['kondisi']."</td>";

				echo "<td>";
				echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
				echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
				echo "</td>";

				echo "</tr>";
			}
			?>
		</tbody>
			<p class="total">Total: <?php echo mysqli_num_rows($query); ?></p>
	</body>
</html>