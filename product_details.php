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
<div class="slider">
	<input type="radio" name="slide_switch" id="id1"/>
		<label for="id1">
			<img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg" width="100"/>
		</label>
	<img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg"/>
	
	<!--default on page load-->
	<input type="radio" name="slide_switch" id="id2" checked="checked"/>
		<label for="id2">
			<img src="http://thecodeplayer.com/uploads/media/40Ly3VB.jpg" width="100"/>
		</label>
	<img src="http://thecodeplayer.com/uploads/media/40Ly3VB.jpg"/>
	
	<input type="radio" name="slide_switch" id="id3"/>
		<label for="id3">
			<img src="http://thecodeplayer.com/uploads/media/00kih8g.jpg" width="100"/>
		</label>
	<img src="http://thecodeplayer.com/uploads/media/00kih8g.jpg"/>
	
	<input type="radio" name="slide_switch" id="id4"/>
		<label for="id4">
			<img src="http://thecodeplayer.com/uploads/media/2rT2vdx.jpg" width="100"/>
		</label>
	<img src="http://thecodeplayer.com/uploads/media/2rT2vdx.jpg"/>
	
	<input type="radio" name="slide_switch" id="id5"/>
		<label for="id5">
			<img src="http://thecodeplayer.com/uploads/media/8k3N3EL.jpg" width="100"/>
		</label>
	<img src="http://thecodeplayer.com/uploads/media/8k3N3EL.jpg"/>
    <div class="details"> 
      <p>Product Name</p>
	  <p>Product Price</p> 
      <p>Product Type</p> 
      <p>Product Desc</p>
		 <div class="sm_icon">
		 	<center>
		 	<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
			<a href="https://twitter.com" class="fa fa-twitter"></a>
			<a href="https://plus.google.com" class="fa fa-google"></a>
			<a href="https://linkedin.com" class="fa fa-linkedin"></a>
			<a href="https://instagram.com" class="fa fa-instagram"></a>    
			</center>  
		 </div>
		
      <a class="button" href="#">Buy Now</a>
      <br>
</div>
</div>
<?php 
include_once('footer.php'); 
?>