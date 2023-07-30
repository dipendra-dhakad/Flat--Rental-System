<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $phone = $_POST['phone'];
	 $email = $_POST['email'];
	 $rent = $_POST['rent'];
	 $category = $_POST['category'];
   $facility = $_POST['facility'];
   $houseno = $_POST['houseno'];
   $colony = $_POST['colony'];
   $landmark = $_POST['landmark'];
   $city = $_POST['city'];
   $dist = $_POST['dist'];
   $state = $_POST['state'];
   $image = $_FILES['image']['tmp_name'];

  
   

	 $sql_query = "INSERT INTO entry_details (name,phone,email,rent,category,facility,houseno,colony,landmark,city,dist,state)
	 VALUES ('$name','$phone','$email','$rent','$category','$facility','$houseno','$colony','$landmark','$city','$dist','$state' )";
     $imageData = file_get_contents($image);
     $imageData = mysqli_real_escape_string($conn, $imageData);

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
		
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>