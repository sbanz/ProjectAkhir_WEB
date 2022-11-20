<?php
  include('functions.php'); 
?>

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
    		<h1>Halaman Pemesanan</h1>
            <a href="index.html"><i class="fas fa-home"></i>Home</a>
    		<a href="create_menu.php"><i class="fa fa-shopping-cart"></i>Order</a>
    	</div>
    </nav>
    <div class="content read">
        <h2>Melihat Orders</h2>
        <a href="create_menu.php" class="create-order">Create Order</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis pesanan</th>
                    <th>Menu</th>
                    <th>Jumlah</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No WA</th>
                    <th>Status</th>
                    <th>Gambar</th>
                    <th class = "th">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = "SELECT * FROM pemesanan ORDER BY id ASC";
                $result = mysqli_query($koneksi, $query);
                if(!$result){
                    die ("Query Error: ".mysqli_errno($koneksi).
                    " - ".mysqli_error($koneksi));
                }
                $no = 1;
                while($row = mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['pesanan']; ?></td>
                <td><?php echo $row['menu']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['no_wa']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td style="text-align: center;"><img src="gambar/<?php echo $row['foto']; ?>" style="width: 100px;"></td>
                <td>
                    <a href="update_menu.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                </td>
            </tr>    
            <?php
                $no++; 
            }
            ?>
            </tbody>
        </table>
        </div>
    </div>
    </body>
</html>