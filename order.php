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
                    <form action="">
                        <label>Nama<input type="text" name="nama" class="input"></label>
                        
                        <br>
                        <select class = "option" type="text" name="id_menu" id="id_menu">
                            <option value="">- Pilih Jenis Menu -</option>
                            <option value="coffee">Coffee</option>
                            <option value="non-coffee">Non Coffee</option>
                            <option value="food">Food</option>
                            <option value="snacks">Snacks</option>
                        </select>

                        <select class = "option" type="text" name="coffee" id="coffee">
                            <option value="">- Pilih Jenis Menu -</option>
                            <option value="coffee">Coffee</option>
                            <option value="non-coffee">Cappucino</option>
                            <option value="food">Frappucino Javachips</option>
                            <option value="snacks">Coffee Brown Sugar</option>
                            <option value="snacks">Tiramisu Latte</option>

                            <option value="coffee">Red Velvet</option>
                            <option value="non-coffee">Green Tea</option>
                            <option value="food">Chocolate Milkshake</option>
                            <option value="snacks">Lemon Tea</option>
                            <option value="snacks">Manggo Smoothies</option>

                            <option value="coffee">Nasi Goreng</option>
                            <option value="non-coffee">Ayam Geprek</option>
                            <option value="food">Chicken Katsu</option>
                            <option value="snacks">Rice Bowl</option>
                            <option value="snacks">Mie Goreng</option>

                            <option value="coffee">French Fries</option>
                            <option value="non-coffee">Nugget & Sausage</option>
                            <option value="food">Fish & Chips</option>
                            <option value="snacks">Gejrot Tofu</option>
                            <option value="snacks">Cassava Chips</option>
                        </select>
                        <br>
                        <label>Bukti Pembayaran<input type="file" name="pembayaran" class="pict"/></label>
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