<?php session_start(); ?>
<?php include_once('header.php');
// require_once('classes/userClass.php');
// $userObj = new USER();
// $userInfo = $userObj->getUserById($_SESSION['result']['id']);
// if(!empty($_SESSION['result']['id'])) {
// header('location:login.php');
// }
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
<div class="page">
	<div class="slideshow" data-transition="fade">
		<input type="radio" name="ss2" id="ss2-item-1" class="slideshow--bullet" checked="checked" />
		<div class="slideshow--item">
			<img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg" />
			<label for="ss2-item-3" class="slideshow--nav slideshow--nav-previous">Go to slide 3</label>
			<label for="ss2-item-2" class="slideshow--nav slideshow--nav-next">Go to slide 2</label>
		</div>
	
		<input type="radio" name="ss2" id="ss2-item-2" class="slideshow--bullet" />
		<div class="slideshow--item">
			<img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg" />
			<label for="ss2-item-1" class="slideshow--nav slideshow--nav-previous">Go to slide 1</label>
			<label for="ss2-item-3" class="slideshow--nav slideshow--nav-next">Go to slide 3</label>
		</div>
	
		<input type="radio" name="ss2" id="ss2-item-3" class="slideshow--bullet" />
		<div class="slideshow--item">
			<img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg" />
			<label for="ss2-item-2" class="slideshow--nav slideshow--nav-previous">Go to slide 2</label>
			<label for="ss2-item-4" class="slideshow--nav slideshow--nav-next">Go to slide 4</label>
		</div>
		
		<input type="radio" name="ss2" id="ss2-item-4" class="slideshow--bullet" />
		<div class="slideshow--item">
			<img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg" />
			<label for="ss2-item-3" class="slideshow--nav slideshow--nav-previous">Go to slide 3</label>
			<label for="ss2-item-1" class="slideshow--nav slideshow--nav-next">Go to slide 1</label>
		</div>

	</div>
</div>
<form>
	<div class="categories_display">
  <div id="wrap">
	<div id="columns" class="columns_4">
  <figure>
  <img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Cloths</figcaption></center>
  
    <a class="button" href="product_list.php">Buy Now</a>
	</figure>
	
	<figure>
	<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Food</figcaption></center>
    <a class="button" href="product_list.php">Buy Now</a>
	</figure>
	
  <figure>
	<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Cosmetics</figcaption></center>
    <a class="button" href="product_list.php">Buy Now</a>
	</figure>
  
	<figure>
	<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Electronics</figcaption></center>
    <a class="button" href="product_list.php">Buy Now</a>
	</figure>
	
   <figure>
	 <img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Shoes</figcaption></center>
    <a class="button" href="product_list.php">Buy Now</a>
	</figure>
	
   <figure>
	 <img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Home Appliances</figcaption></center>
     <a class="button" href="product_list.php">Buy Now</a>
	</figure>
  
	<figure>
	<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Furniture</figcaption></center>
    <a class="button" href="product_list.php">Buy Now</a>
	</figure>	
  
   <figure>
	<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Sports</figcaption></center>
     <a class="button" href="product_list.php">Buy Now</a>
	</figure>

	<figure>
	<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Accessories</figcaption></center>
     <a class="button" href="product_list.php">Buy Now</a>
	</figure>

	<figure>
	<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Baby Products</figcaption></center>
     <a class="button" href="product_list.php">Buy Now</a>
	</figure>

	<figure>
	<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Mobiles</figcaption></center>
     <a class="button" href="product_list.php">Buy Now</a>
	</figure>

	<figure>
	<img src="https://cdn.lynda.com/course/417645/417645-636618158800124958-16x9.jpg">
	<center><figcaption>Laptops</figcaption></center>
     <a class="button" href="product_list.php">Buy Now</a>
	</figure>
	</div>
   </div>
</div>
</form>

    <?php 
include_once('footer.php'); 
?>