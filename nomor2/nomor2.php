<?php
 $provinsi = array(
    array(
      "provinsi" => "Jawa Timur",
      "kabupaten" => "Surabaya",
      "kecamatan" => "Jambangan",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Surabaya",
        "kecamatan" => "Wonokromo",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Taman",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Waru",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "Kecamatan 2",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "Kecamatan 2",
    ),
  );
?>

<!DOCTYPE html>
<html>
<style type="text/css">
	table{
		border:1px solid #ddd;
		border-collapse: collapse;
		width: 48%;
	}
	
	th, td {
		border:1px solid #ddd;
		padding: 8px;
		text-align: left;
	}

	th {
		background-color: #b27397;
		color: white;
		text-align: center;
	}

	tr:nth-child(even){
		background-color:#fdebf7;
	} 

</style>
<head>
	<title>Daerah di Indonesia</title>
</head>
<body bgcolor="white">
	<center>
		<h1>---- Daerah Di Indonesia ----</h1>
	</center>
	<table align="center">	
		<tr>
			<th>No</th>
			<th>Provinsi</th>
			<th>Kabupaten</th>
			<th>Kecamatan</th>
		</tr>
		
		<?php 
			$no = 1;
			foreach ($provinsi as $daerah) { ?>
				<tr>
					<th width="24px"><?php echo "$no"; $no++; ?></th>
					<td><?php echo $daerah["provinsi"]; ?></td>
					<td><?php echo $daerah["kabupaten"]; ?></td>
					<td><?php echo $daerah["kecamatan"]; ?></td>
				</tr>
			<?php } ?>
			
			
	</table>

</body>
</html>
