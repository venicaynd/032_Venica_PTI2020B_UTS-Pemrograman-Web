<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css"> 
	<title>V-Shop</title>
</head>
<body>
	<h1>Hello... Welcome To V-Shop!!</h1>
	<h1>---- Our Product ----</h1>
	<table>
		<tr>
			<th>Product Image</th>
			<th>Name</th>
			<th>Price</th>
			<th>Size</th>
			<th>Color</th>
			<th>Order</th>
			
		</tr>
		<?php
			$json_data = file_get_contents("jualan.json");
			$jualan = json_decode($json_data, true);
			if(count($jualan) != 0 ){
				foreach($jualan as $product){
					?>
					<tr>
						<td> <img src="<?php echo $product['gambar']?>" alt="" </td>
						<td> <?php echo $product['name']?> </td>
						<td> <?php echo $product['harga']?> </td>
						<td> <?php echo $product['ukuran']?> </td>
						<td> <?php echo $product['warna']?> </td>
						<td>
							<div class="order">
								<button>Order Now</button>
							</div>
						</td>
						
					</tr>
					<?php
				}
			}
		?>
	</table>
	
	<div class="about">
		<img src="images/logo.png" alt="">
		<p>V-Shop merupakan aplikasi pemesanan yang menyediakan berbagai jenis pakaian. Customer dapat melakukan transaksi dari rumah. <br>Mereka hanya perlu mencari produk yang diinginkan melalui layar dengan menklik button "Order Now" yang telah tersedia. <br>Setelah customer selesai melakukan pemesanan, maka produk akan segera dikemas dan dikirimkan.</p>
		<br/>
        <h2>Contact :</h2>
        <div class="identitas">
            <div class="contact">
                <img src="images/logo2.png" alt="">
                <p>Email</p>
                <span>admin@jualanbaju.com</span>
            </div>
			<div class="contact">
                <img src="images/logo4.png" alt="">
                <p>No Telepon</p>
                <span>+6281234567890</span>
            </div>
			<div class="contact">
                <img src="images/logo3.png" alt="">
                <p>Alamat</p>
                <span>Jl. Ahmad Yani No.0 Surabaya</span>
            </div>
        </div>
	</div>
</body>
</html>