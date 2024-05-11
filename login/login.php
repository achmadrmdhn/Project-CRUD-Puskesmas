<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Now</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css" />
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme9.css" />
    <link rel="shortcut icon" href="../dist/img/favicon_io/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div class="form-body">
      <div class="row">
        <div class="img-holder">
          <div class="bg"></div>
          <div class="info-holder">
            <h2>Silahkan Login Ke Dashboard Puskesmas</h2>
            <img src="./images/doctor-login.svg" alt="" />
          </div>
        </div>
        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <div class="">
                <a href="../index.html">
                  <div class="">
                    <img class="mb-5" src="./images/logo login-page.png" width="150px" alt="" />
                  </div>
                </a>
              </div>
              <div class="page-links">
                <h3 class="active">Login</h3>
              </div>
              <form action="proses.php" method="POST">
                <input class="form-control" type="text" id="username" name="username" placeholder="Masukan Username" required />
                <input class="form-control" type="password" id="password" name="password" placeholder="Masukan Password" required />
                <div class="form-button">
                  <button type="submit" id="submit" name="submit" class="ibtn">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
