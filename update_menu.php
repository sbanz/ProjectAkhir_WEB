<?php
include 'functions.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    $query = "SELECT * FROM pemesanan WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.html';</script>";}
     } else {
          echo "<script>alert('Masukkan data id.');window.location='index.html';</script>";
     }         
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>update</title>
		<link href="style1.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <nav class="navtop">
            <div>
                <h1>Order</h1>
                <a href="index.html"><i class="fas fa-home"></i>Home</a>
                <a href="create_menu.php"><i class="fa fa-shopping-cart"></i>Order</a>
            </div>
        </nav>
        <left>
            <h1>Edit <?php echo $data['nama']; ?></h1>
        <left>
            <form method="POST" action="update.php" enctype="multipart/form-data" >
            <section class="base">
                <input name="id" value="<?php echo $data['id']; ?>"  hidden />
                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
                <label>Jenis Makanan</label>
                <input type="text" name="pesanan" value="<?php echo $data['pesanan']; ?>" />
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
                <label>Jumlah</label>
                <input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>" />
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" />
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $data['email']; ?>" />
                <label>No telp</label>
                <input type="text" name="notelp" required=""value="<?php echo $data['no_wa']; ?>" />
                <label>Gambar Produk</label>
                <img src="gambar/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                <input type="file" name="foto" />
                <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                <button type="submit">Simpan Perubahan</button>
            </section>
            </form>
    </body>
</html>