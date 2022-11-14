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
            <div class="box-nav" style="margin-right:5%">
                <!-- <div class="box"> -->
                    <img src="logo_cafe.png" alt="logo" height="60vh" width="70vw">
                <!-- </div> -->
            </div>
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Pencarian...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn"><i class="fa-solid fa-user-tie"></i></a>
                </div>
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
                        <th>Username</th>
                        <th>ID Menu</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                    <tr>
                        <td>69696969</td>
                        <td>Vynnn</td>
                        <td>777777</td>
                        <td>20/10/22</td>
                        <td><img src="logo_cofe.jpg" alt="ini gambar" width="50px"></td>
                        <td><a href="#" class="btn">blom</a></td>
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