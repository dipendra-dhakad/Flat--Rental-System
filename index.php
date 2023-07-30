<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log In</title>
  <!-- LInk To CSS -->
  <link rel="stylesheet" href="style.css" />
  <!-- Box Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
</head>

<body>
  <!-- Navbar -->
  <header>
    <div class="nav container">
      <!-- Logo -->
      <a href="" class="logo"><i class="bx bx-home"></i>Flat Rental System</a>
    </div>
  </header>
  <!-- Log In -->

  <section class="pagee">
    <br><br>
    <div class="borderr">
      <div class="login containerr">
        <div class="login-container">
          <br><br>
          <h2>Login To Continue</h2>
          <p>
            Log in with your data that you entered <br />during your
            registration
          </p>
          <!-- Login Form -->

          <form action="" method="POST">
            <span>Username</span>
            <input type="text" name="username" id="" placeholder="username" required="required" />
            <span>Enter your password</span>
            <input type="password" name="password" id="" placeholder="Password" required="required" />

            <button name="login" class="buttom">Login</button>
            <a href="#">Forget Password?</a>
          </form>

          <?php include 'login.php' ?>

        </div>
      </div>
    </div>



    <div class="borderr">
      <div class="login containerr">
        <div class="login-container">
          <br />
          <br />
          <br>
          <h2>Welcome , Let's get started </h2>
          <h3>Create Your Account</h3>

          <!-- Login Form -->

          <form action="" method="POST">
            <span>Name</span>
            <input type="text" name="name" placeholder="Your Name" required="required" />
            <span>Username</span>
            <input type="text" name="username" placeholder="username" required="required" />

            <span>Password</span>
            <input type="password" maxlength="12" name="password" placeholder="Password" required="required" />

            <button name="register" class="buttom">Sign Up</button>
          </form>

          <?php include 'register.php' ?>

        </div>
      </div>
    </div>



  </section>

  <!-- Footer -->

  <section class="footer">
    <div class="footer-container container">
      <h2>Flat Rental System</h2>

      <div class="footer-box">
        <h3>Contact</h3>
        <a href="#">+91 9669024735</a>
        <a href="#">flatrentalsystem@gmail.com</a>
        <div class="social">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- Copyright -->
  <div class="copyright">
    <p>FlatRentalSystem All Right Reserved</p>
  </div>
</body>

</html>