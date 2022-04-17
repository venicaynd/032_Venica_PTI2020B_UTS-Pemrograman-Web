<?php

error_reporting(0);

include "./SpreadsheetReader.php";

$reader = new SpreadsheetReader('excel_uts_no5.xlsx');
$sheets = $reader->Sheets();

$ambil_sheet = 0;
$reader->ChangeSheet($ambil_sheet); ?>

<!DOCTYPE html>
<html>
<style type="text/css">
	table, {
	  border:1px solid #ddd;
	  border-collapse: collapse;
	}
	
	th, td {
		border:1px solid #ddd;
		padding: 8px;
		text-align: left;
	}

	th {
	  background-color: #deb887;
	  color: white;
	  text-align: center;
	}

	tr:nth-child(even){
		background-color:#fdf5e6;
	} 
</style>

<head>
	<title>Data Mahasiswa</title>
</head>

<body>
	<center>
		<h1>---- Data Mahasiswa Jurusan Teknik Informatika ----</h1>
	</center>

	<table align="center">
		<tr>
			<th width="24">
				<b>No</b>
			</th>
			<th width="100">
				<b>NIM</b>
			</th>
			<th width="190">
				<b>Nama</b>
			</th>
			<th width="28">
				<b>JK</b>
			</th>
			<th width="240">
				<b>Program Studi</b>
			</th>
			<th width="200">
				<b>Alamat</b>
			</th>
			<th width="88">
				<b>Kota</b>
			</th>
			<th width="240">
				<b>Email</b>
			</th>
		</tr>

		<?php foreach($reader as $i => $kolom):
			if ($i == 0 || (empty($kolom[0]) && empty($kolom[1]) && empty($kolom[2])))
				continue ?>
				<tr>
					<th><?=$kolom[0]?></th>
					<td><?=$kolom[1]?></td>
					<td><?=$kolom[2]?></td>
					<td style="text-align: center"><?=$kolom[3]?></td>
					<td><?=$kolom[4]?></td>
					<td><?=$kolom[5]?></td>
					<td><?=$kolom[6]?></td>
					<td><?=$kolom[7]?></td>
				</tr>
		<?php endforeach ?>
	</table>

</body>
</html>