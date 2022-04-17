<?php
	$buku = array(
		array(
			"judul" => "Pemrograman Web dengan Laravel",
			"pengarang" => "Budi Sutejo",
			"tahun" => 2019
		),
		array(
			"judul" => "Belajar Mandiri Python",
			"pengarang" => "Ahmad Arifin",
			"tahun" => 2010
		),
		array(
			"judul" => "Microsoft Word untuk Penulisan Ilmiah",
			"pengarang" => "Edi Rahmadi",
			"tahun" => 2015
		),
		array(
			"judul" => "HTML dan CSS : Design and Build Websites",
			"pengarang" => "Jon Ducket",
			"tahun" => 2011
		),
		array(
			"judul" => "Learning Web Design : A Beginner's Guide to HTML,CSS, JavaSript, and Web Graphics",
			"pengarang" => "Jennifer Robbins",
			"tahun" => 2018
		)
	);
?>

<!DOCTYPE html>
<html>
<style type="text/css">
	table{
		border:1px solid #ddd;
		border-collapse: collapse;
		width: 70%;
	}
	
	th, td {
		border:1px solid #ddd;
		padding: 8px;
		text-align: left;
	}

	th {
		background-color: #8fbc8f;
		color: white;
		text-align: center;
	}

	tr:nth-child(even){
		background-color:#efefef;
	} 

</style>
<head>
	<title>V-Library</title>
</head>
<body>
	<center>
		<h1>---- Data Buku In The V-Library ----</h1>
	</center>
	<table align="center">
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Tahun Terbit</th>
		</tr>
			<?php 
			$no = 1;
			
			foreach ($buku as $buku) { ?>
				<tr>
					<th><?php echo "$no"; $no++; ?></th>
					<td><?php echo $buku["judul"]; ?></td>
					<td><?php echo $buku["pengarang"]; ?></td>
					<td><?php echo $buku["tahun"]; ?></td>
				</tr>
				
				
			<?php } ?>
			
			
	
	</table>

</body>
</html>
