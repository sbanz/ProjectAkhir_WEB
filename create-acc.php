<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="form.css">
    <script src="scripts.js defer"></script> 
  </head>

  <body>
    <header>
      <section class="navigation">
        <div class="container">
            <div class="box-nav">
                <div class="box">
                    <img src="pict/logo_cafe.png" alt="logo" height="90px" width="90px">
                    <h3>COFFEE HOUSE</h3>
                </div>
            </div>  
        </div>
      </section>
    </header>

    <div class="wrapper">   
        <div class="container">
            <div class="content">
                <div class="box-create">
                    <div class="card-main">
                        <div class="login-header">Form Create New Account</div>
                        <div class="login-body">
                            <form class="form-login" method="POST" action="form.php">
                                <label class="form-label">Name</label>
                                <input type="text" 
                                name="name" 
                                placeholder="your name..."
                                class="form-input">
                                <label class="form-label">Email</label>
                                <input type="email" 
                                name="email" 
                                placeholder="google@gmail.com"
                                class="form-input">
                                <label class="form-label">Password</label>
                                <input type="password" 
                                name="password" 
                                placeholder="Anything else..."
                                class="form-input">
                                <label class="form-label">Phone number</label>
                                <input type="tel"
                                pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" 
                                name="Phone number" 
                                placeholder="0000-0000-0000"
                                class="form-input">
                                <div class="btn">
                                  <input type="submit" class="button" value="Create Account">
                                  <a href="login-acc.php" class="button" >Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
      <div class="container">
        <p><a href="https://github.com/sbanz/ProjectAkhir_WEB">© PA Web, 2022. All rights reserved</a></p>
      </div>
    </footer>

  </body>
</html>