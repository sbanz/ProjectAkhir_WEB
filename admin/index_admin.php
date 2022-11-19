<?php
  include('../connect.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://kit.fontawesome.com/ad295b8459.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="admin.css">
  </head>

  <body>
    <div class="sidebar">
        <div class="brand">
            <h1>Administrator</h1>
        </div>
        <ul>
            <li><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
            <li><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;<span>History</span></li>
        </ul>
    </div> 

    <div class="container">
        <div class="header">
            <div class="box-nav">
                <img src="logo_cafe.png" alt="logo" height="60vh" width="70vw">
            </div>
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Pencarian...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <label>
                    <input type="checkbox">
                    <span class="check"><i class="ri-toggle-fill"></i></span>
                </label>
            </div>
        </div>
        <div class="content">
            <div class="box">
                <div class="title">
                    <h2>Data Orderan</h2>
                </div>
                <table>
                    <tr>
                        <th>ID Order</th>
                        <th>Nama</th>
                        <th>ID Menu</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                    <tr>
                    <?php
                        $query = "SELECT * FROM orders WHERE status = 'belum' ORDER BY id_orders ASC ";
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
                        <td><?php echo $row['id_menus']; ?></td>
                        <td><?php echo $row['waktu']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td style="text-align: center;"><img src="gambar/<?php echo $row['bukti']; ?>" style="width: 120px;"></td>
                        <td>
                            <!-- <a href="update_menu.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a> -->
                        </td>
                    </tr>    
                    <?php
                        $no++; 
                    }
                    ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    </body>
    <footer>
    <div class="container">
        <p><a href="https://github.com/sbanz/ProjectAkhir_WEB">© PA Web, 2022. All rights reserved</a></p>
    </div>
    </footer>
</html>
