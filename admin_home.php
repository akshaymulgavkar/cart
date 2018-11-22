<?php include_once('header.php');
?>
<div class="nav">
  <div class="nav-header">
    <div class="nav-title">
      <a href="admin_home.php">Admin</a>
    </div>
  </div>
  <div class="nav-links">
    <a href="function.php?type=logout">Logout</a>
  </div>
</div>
<table>
	<center>
	<h3><p>Welcome to Admin Dashboard</p></h3>
		<a type="submit" class="btn" style="text-decoration:none" href="addCategory.php">Add New Category</a>
		<a type="submit" class="btn" style="text-decoration:none" href="addProduct.php">Add New Product</a>
		<a type="submit" class="btn" style="text-decoration:none" href="function.php?type=viewProduct">View All Products</a>
		<a type="submit" class="btn" style="text-decoration:none" href="function.php?type=viewCategory">View All Categories</a><p>
	</center>
	<center><p id="msg" class="p"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p></center>
</table>
<?php include_once('footer.php'); ?>