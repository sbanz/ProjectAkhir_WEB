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
            <i class="fa-sharp fa-solid fa-qrcode"></i>&nbsp;&nbsp;
            <h1>Administrator</h1>
        </div>
        <ul>
            <li><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
            <li><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;<span>History Orederan</span></li>
        </ul>
    </div> 

    <div class="container">
        <div class="header">
            <div class="box-nav">
                <div class="box">
                    <img src="pict/logo_cafe.png" alt="logo" height="70px" width="70px">
                </div>
            </div>
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Pencarian...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-user-tie"></i></a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="payment">
                <div class="title">
                    <h2>Data Orderan</h2>
                    <a href="#" class.btn>Lihat Semua</a>
                </div>
                <table>
                    <tr>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>coffee</td>
                        <td>20.000</td>
                        <td><a href="#" class="btn">lihat</a></td>
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
