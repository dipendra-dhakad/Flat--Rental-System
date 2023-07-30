<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_register_login');

if (!$conn) {
	die(mysqli_error());
}

if (isset($_POST['submit'])) {
	$textareaValue = trim($_POST['content']);

	$sql = "INSERT INTO textarea_value (textarea_content) values ('" . $textareaValue . "')";
	$rs = mysqli_query($conn, $sql);
	$affectedRows = mysqli_affected_rows($conn);

	if ($affectedRows == 1) {
		$successMsg = "Record has been saved successfully";
	}
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>Flat Rental System</title>
    <!-- LInk To CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
</head>

<body>

    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="#" class="logo"><i class='bx bx-home'></i>Flat Rental System</a>
            <!-- Menu Icon -->
            <input type="checkbox" name="" id="menu">
            <label for="menu" <i class='bx bx-menu' id="menu-icon"></i></label>
            <!-- Nav List -->
            <ul class="navbar">
                <li id="homi"><a href="home.php">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="#cont">Contact</a></li>
                <li><a href="properties.html">Properties</a></li>
            </ul>
            <!-- Log out Button -->
            <a href="logout.php" class="btn">Log out</a>
            
        </div>

    </header>

    <br><br>
    <!-- Home -->
    <section class="home container" id="home">
        <div class="home-text">
            <h1>Find Your <span class="typingg">Flats...</span> <br>Perfect Place To <br>Live.</h1>
        </div>
        
    </section>

    <br><br><br><br>



    <!-- Properties -->
    <section class="properties container" id="properties">
        <div class="heading">

            <h2>Our Featured Properties</h2>
            <p>Find Best flats or Rooms</p>
</div>


        <div class="properties-container container">
            <!-- Box 1 -->
          
            <div class="box">
            <a href="flatdetails.html">  <img src="img/p1.jpg" alt="">  </a>   
                <h3> ₹ 8,000</h3>
                <div class="content">
                    <div class="text">
                        <h3>1 BHK Flat</h3>
                        <p>Indore</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
           

            <!-- Box 2 -->
            <div class="box">
             <a href="flatdetails.html">   <img src="img/p2.jpg" alt=""> </a>
                <h3> ₹ 15,000</h3>
                <div class="content">
                    <div class="text">
                        <h3>2 BHK Flat</h3>
                        <p>Indore</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="box">
            <a href="boyshostel.html"><img src="img/p3.jpg" alt=""> </a>
                <h3> ₹ 6,000</h3>
                <div class="content">
                    <div class="text">
                        <h3>Hostel</h3>
                        <p>Indore</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 4 -->
            <div class="box">
             <a href="roomdetails.html">  <img src="img/p4.jpg" alt=""> </a> 
                <h3> ₹ 8,000</h3>
                <div class="content">
                    <div class="text">
                        <h3>Rooms</h3>
                        <p>Indore</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 5 -->
            <div class="box">
             <a href="pg.html">   <img src="img/p5.jpg" alt=""> </a>
                <h3> ₹ 5,000</h3>
                <div class="content">
                    <div class="text">
                        <h3>PG's</h3>
                        <p>Indore</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 6 -->
            <div class="box">
        <a href="flatdetails.html">       <img src="img/p6.jpg" alt=""> </a> 
                <h3> ₹ 18,000</h3>
                <div class="content">
                    <div class="text">
                        <h3>3 BHK Flat</h3>
                        <p>Indore</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php
	if (isset($successMsg)) {
		echo "<div class='success-msg'>";
		print_r($successMsg);
		echo "</div>";
	}
	?>


    <!-- Newsletter -->
    <section class="newsletter container">
        <h2>Have Question in mind? <br>Let us help you</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
        <textarea style="resize: none; border: none; margin-top: 13px"  rows="5" cols="60" name="content" required></textarea>
        </div>
            <input class="btn" type="submit" name="submit" value="Submit" >
        </form>`   
    </section>

</form>




    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <h2>Flat Rental System</h2>
            <div class="footer-box">
                <h3>Locations</h3>
                <a href="#">Indore</a>
            </div>

            <div class="footer-box">
                <h3>Popular Places in Indore</h3>
                <a href="#">Bhawarkua</a>
                <a href="#">Rajendra Nagar</a>
                <a href="#">Vijay Nagar</a>
                <a href="#">Sapna Sangeeta</a>
                <a href="#">Sarvanand Nagar</a>
                <a href="#">Shivampuri Colony</a>

            </div>
            <div class="footer-box">
                <h3 id="cont">Contact</h3>
                <a href="#">+91 9669024735</a>
                <a href="#">flatrentalsystem@gmail.com</a>
                <a href="https://goo.gl/maps/Ua4z2j1gnp3GAvMM8"><i class="fa fa-map-marker"></i>Shivampuri Colony</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>FlatRentalSystem All Right Reserved</p>
    </div>

    <script src="/script.js"></script>
    <script src="/newscript.js"></script>
</body>

</html>