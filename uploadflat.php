

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="uploadflat.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="propertyy.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="index.html" class="logo"><i class='bx bx-home'></i>Flat Rental System</a>
            <!-- Menu Icon -->
            <input type="checkbox" name="" id="menu">
            <label for="menu" <i class='bx bx-menu' id="menu-icon"></i></label>
            <!-- Nav List -->
            <ul class="navbar">
                <li id="homi"><a href="index.html">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="#cont">Contact</a></li>
                <li ><a href="properties.html">Properties</a></li>
            </ul>
            <!-- Log In Button -->
            <a href="index.php" class="btn">Log Out</a>
       
        </div>

    </header>

    <section class="sectionn" >
        <br>
        <a href="uploadedproperties.html">
            <div id="ownerpage">
           <h4>Uploaded Properties</h4>
       </div> </a>

<div class="uploadform">
    <form action="/phplogin2/upload.php" method="POST"  enctype="multipart/form-data">
    <div class="ownername">
    <label for="Name">Name</label>
    <br>
    <input type="text" name="name" placeholder="Name" required="required"/>
</div>

<br>


    <div class="ownername">
    <label for="Name">Mobile Number</label>
    <br>
    <input type="number" name="phone" placeholder="e.g. 9000000000" required="required"/>
</div>

<br>


    <div class="ownername">
    <label for="Name">Email</label>
    <br>
    <input type="email" name="email" placeholder="youremail@gmail.com" required="required"/>
</div>

<br>

<div class="monthlyrent">
    <label for="rent">Monthly Rent</label>
    <br>
    <input placeholder="e.g. 9000" name="rent" type="number" required="required"/>
</div>

<br>

<div class="city">
    <label for="Category">Category</label>
    <br>
    <input type="text" name="category" placeholder="e.g 1BHK, 2BHK, hostel" required="required">
</div>


<br>

<div class="city">
    <label for="City">Facilites</label>
    <br>
    <input type="text" name="facility" placeholder="Facilities" required="required">
</div>

<br>


<div class="city">
    <label for="">House No.</label>
    <br>
    <input type="number" name="houseno"  placeholder="H. No." required="required">
</div>

<br>

<div class="city">
    <label for="City">Colony</label>
    <br>
    <input type="text" name="colony" placeholder="Colony" required="required">
</div>

<br>

<div class="city">
    <label for="City">Landmark</label>
    <br>
    <input type="text" name="landmark" placeholder="Landmark" >
</div>

<br>

<div class="city">
    <label for="City">City</label>
    <br>
    <input type="text" name="city"  placeholder="City" required="required">
</div>

<br>

<div class="cityy">
    <label for="City">District</label>
    <br>
    <input type="text" name="dist" placeholder="District"required="required">
</div>

<br>

<div class="cityy">
    <label for="City">State</label>
    <br>
    <input type="text" name="state" placeholder="State" required="required">
</div>
<div>
<input type="file" name="image">
</div>
<br>
<input  type="submit" name="save" class="btn"></input>

</div>
</form>


</section>
</body>
</html>
