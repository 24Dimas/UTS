<!DOCTYPE html>
<html>
<head>
	<title>Data Array</title>
	<style>
		body {
			background-color: #c0c0c0;
			font-family: Arial, sans-serif;
			color: #393939;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 50px;
			font-family: Arial, sans-serif;
			color: #393939;
		}
		th {
			background-color: #FF7F50;
			color: #FFF;
		}
		th, td {
			padding: 8px;
			text-align: center;
			border-bottom: 1px solid #ddd;
		}
		tr:nth-child(even) {
			background-color: #00bfff;
		}
		tr:hover {
			background-color: #00bfff;
			color: #FFF;
		}
	</style>
</head>
<body>
	<?php
		$id_tamu = array(33,46,55);
		$nama_tamu = array("Hermawan", "Sucipto", "Sutris");
		$alamat_tamu = array("Jl.Ahmad Yani No.24","Jl.Thamrin No.08","Jl.Sudirman No.03");
		$nomor_telepon = array("081341625554","089604073708","089437215431");
	?>
	<h1>Data Tamu</h1>
	<table>
		<thead>
			<tr>
				<th>Id Tamu</th>
				<th>Nama Tamu</th>
				<th>Alamat Tamu</th>
				<th>Nomor Telepon</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($i=0; $i<count($id_tamu); $i++) {
					echo "<tr>";
					echo "<td>".$id_tamu[$i]."</td>";
					echo "<td>".$nama_tamu[$i]."</td>";
					echo "<td>".$alamat_tamu[$i]."</td>";
					echo "<td>".$nomor_telepon[$i]."</td>";
					echo "</tr>";
				}			
			?>
		</tbody>
	</table>
<body>
	<?php
		$id_hotel = array(443,725,699);
		$nama_hotel = array("Hotel Melati", "Hotel Mawar", "Hotel 2 Sekawan");
		$alamat_hotel= array("Jl.Gatotkaca No.22","Jl.Hanacaraka No.03","Jl.Ahmad Dahlan No.15");
		$jumlah_kamar = array("55","80","110");
	?>
	<h1>Data Hotel</h1>
	<table>
		<thead>
			<tr>
				<th>Id Hotel</th>
				<th>Nama Hotel</th>
				<th>Alamat Hotel</th>
				<th>Jumlah Kamar</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($i=0; $i<count($id_hotel); $i++) {
					echo "<tr>";
					echo "<td>".$id_hotel[$i]."</td>";
					echo "<td>".$nama_hotel[$i]."</td>";
					echo "<td>".$alamat_hotel[$i]."</td>";
					echo "<td>".$jumlah_kamar[$i]."</td>";
					echo "</tr>";
				}			
			?>
		</tbody>
</body>
</html>

