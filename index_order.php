<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" 
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="style_order.css">
        <title>Order Page</title>
    </head>
    <body>
        <header>
            <section class="navigation">
                <div class="container">
                    <div class="box-nav">
                        <div class="box">
                            <img src="pict/logo_cafe.png" alt="logo" height="90px" width="90px">
                            <h3>COFFEE HOUSE</h3>
                            <label>
                                <input type="checkbox">
                                <span class="check"><i class="ri-toggle-fill"></i></span>
                            </label>
                        </div>
                        <div class="box menu-nav">
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="./login/login.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>  
                </div>
            </section> 

            <div class="order">
                <section class="base">
                    <form method= "POST" action="order.php" enctype="multipart/form-data">
                        <label>Nama<input type="text" name="nama" class="input"></label>
                        
                        <br>
                        <select class = "option" type="text" name="menus_type" id="menus_type">
                            <option value="">- Pilih Jenis Menu -</option>
                            <option value="coffee">Coffee</option>
                            <option value="non-coffee">Non Coffee</option>
                            <option value="food">Food</option>
                            <option value="snacks">Snacks</option>
                        </select>

                        <select class = "option" type="text" name="menus_name" id="menus_name">
                            <option value="">- Pilih Jenis Menu -</option>
                            <option value="Coffee">Coffee</option>
                            <option value="Cappucino">Cappucino</option>
                            <option value="Frappucino Javachips">Frappucino Javachips</option>
                            <option value="Coffee Brown Sugar">Coffee Brown Sugar</option>
                            <option value="Tiramisu Latte">Tiramisu Latte</option>

                            <option value="Red Velvet">Red Velvet</option>
                            <option value="Green Tea">Green Tea</option>
                            <option value="Chocolate Milkshake">Chocolate Milkshake</option>
                            <option value="Lemon Tea">Lemon Tea</option>
                            <option value="Manggo Smoothies">Manggo Smoothies</option>

                            <option value="Nasi Goreng">Nasi Goreng</option>
                            <option value="Ayam Geprek">Ayam Geprek</option>
                            <option value="Chicken Katsu">Chicken Katsu</option>
                            <option value="Rice Bowl">Rice Bowl</option>
                            <option value="Mie Goreng">Mie Goreng</option>

                            <option value="French Fries">French Fries</option>
                            <option value="Nugget & Sausage">Nugget & Sausage</option>
                            <option value="Fish & Chips">Fish & Chips</option>
                            <option value="Gejrot Tofu">Gejrot Tofu</option>
                            <option value="Cassava Chips">Cassava Chips</option>
                        </select>
                        <br>
                        <label>Bukti Pembayaran<input type="file" name="bukti" class="pict"/></label>
                        <br>
                        <button type="submit">Confirm</button>
                    </form>
                    </section>
                </div>
            

        </header>

            
        <script src="script.js"></script>

    </body>
    <footer>
        <div class="container">
            <p><a href="https://github.com/sbanz/ProjectAkhir_WEB">© PA Web, 2022. All rights reserved</a></p>
        </div>
    </footer>
    </html>