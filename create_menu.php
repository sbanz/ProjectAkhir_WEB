<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style1.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <nav class="navtop">
            <div>
                <h1>Order</h1>
                <a href="index.html"><i class="fas fa-home"></i>Home</a>
                <a href="read.php"><i class="fa fa-shopping-cart"></i>Order</a>
            </div>
        </nav>
        <left>
            <h1>Tambah</h1>
        <left>
        <form method="POST" action="create.php" enctype="multipart/form-data" >
        <section class="base">
            <label>Nama</label>
            <input type="text" name="nama" />
            <label  for="pesanan">jenis pesanan</label>
            <select class = "option" type="text" name="pesanan" id="pesanan">
            <option value="pilih">-Pilih Tipe Pesanan-</option>
            <option value="Food">Food</option>
            <option value="coffe">Coffe</option>
            <option value="non-coffee">non-coffee</option>
            <option value="Snacks">Snacks</option>
            </select>
        <br>
            <label>Jumlah</label>
            <input type="text" name="jumlah" />
            <label>Alamat</label>
            <input type="text" name="alamat" />
            <label>Email</label>
            <input type="text" name="email" />
            <label>No Wa</label>
            <input type="text" name="no_wa" />
        <br>
        <h2>
            <label  for="menu">menu</label>
            <select class = "option" type="text" name="menu" id="menu">
            <option value="pilih">-Pilih menu-</option>
            <option value="Coffe">Coffe</option>
            <option value="Cappucino">Cappucino</option>
            <option value="Frappucino Javachips">Frappucino Javachips</option>
            <option value="Coffee Brown Sugar">Coffee Brown Sugar</option>
            <option value="Tiramisu Latte">Tiramisu Latte</option>
            <option value="Red Velvet">Red Velvet</option>
            <option value="Green Tea">Green Tea</option>
            <option value="Chocolate Milkshake ">Chocolate Milkshake</option>
            <option value="Lemon Tea ">Lemon Tea</option>
            <option value="Manggo Smoothies ">Manggo Smoothies</option>
            <option value="Nasi Goreng ">Nasi Goreng</option>
            <option value="Ayam Geprek ">Ayam Geprek</option>
            <option value="Chicken Katsu ">Chicken Katsu</option>
            <option value="Rice Bowl ">Rice Bowl</option>
            <option value="Mie Goreng ">>Mie Goreng</option>
            <option value="French Fries ">French Fries</option>
            <option value="Nugget & Sausage ">Nugget & Sausage</option>
            <option value="Fish & Chips ">Fish & Chips</option>
            <option value="Gejrot Tofu ">Gejrot Tofu</option>
            <option value="Cassava Chips ">Cassava Chips</option>
            </select>
            <label  for="status">status</label>
            <select class = "option" type="text" name="status" id="status">
            <option value="sudah dibayar">sudah dibayar</option>
            <option value="belum dibayar">belum dibayar</option>
            </select>
        </h2>
            <label>Bukti Identitas</label>
            <input type="file" name="foto" required="" />
            <button type="submit">Create</button>
        </section>
        </form>
    </body>
</html>