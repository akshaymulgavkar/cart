<?php 
include_once('header.php'); 
if (!isset($_SESSION))
    {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>
<div class="nav">
  <div class="nav-header">
    <div class="nav-title">
      <a href="user_home.php">Cart Home</a>
    </div>
  </div>
  <div class="nav-links">
    <a href="function.php?type=logout">Logout</a>
  </div>
</div>
<form>
<div class="categories_display">
  <div id="wrap">
	<div id="columns" class="columns_4">
	 <figure>
 	 <img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Cloths</figcaption></center>
  	  <a class="button" href="product_details.php">Buy Now</a>
	</figure>
	
	<figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Food</figcaption></center>
	    <a class="button" href="product_details.php">Buy Now</a>
	</figure>
	
  	<figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Cosmetics</figcaption></center>
	    <a class="button" href="product_details.php">Buy Now</a>
	</figure>
  
	<figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Electronics</figcaption></center>
	    <a class="button" href="product_details.php">Buy Now</a>
	</figure>
	
   <figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Shoes</figcaption></center>
	    <a class="button" href="product_details.php">Buy Now</a>
	</figure>
	
   <figure>
	 <img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	 <center><figcaption>Home Appliances</figcaption></center>
     <a class="button" href="product_details.php">Buy Now</a>
	</figure>
  
	<figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Furniture</figcaption></center>
	    <a class="button" href="product_details.php">Buy Now</a>
	</figure>	
  
   <figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Sports</figcaption></center>
	     <a class="button" href="product_details.php">Buy Now</a>
	</figure>

	<figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Accessories</figcaption></center>
	     <a class="button" href="product_details.php">Buy Now</a>
	</figure>

	<figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Baby Products</figcaption></center>
	     <a class="button" href="product_details.php">Buy Now</a>
	</figure>

	<figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Mobiles</figcaption></center>
	     <a class="button" href="product_details.php">Buy Now</a>
	</figure>

	<figure>
		<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
		<center><figcaption>Laptops</figcaption></center>
	     <a class="button" href="product_details.php">Buy Now</a>
	</figure>
	</div>
   </div>
</div>
</form>

<?php 
include_once('footer.php'); 
?>