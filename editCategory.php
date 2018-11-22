<?php include_once('header.php'); 
?>
<div class="nav">
  <div class="nav-header">
    <div class="nav-title">
      <a href="admin_home.php">Admin DashBoard</a>
    </div>
  </div>
  <div class="nav-links">
    <a href="function.php?type=logout">Logout</a>
  </div>
</div>
<div class="outDiv">
	<p id="msg" class="p"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
	<center><h3><p>Edit Category</p></h3></center>
		<form name="allForm" id="allForm" method="post" action="function.php?type=editCategory">
			<table border="0" width="500" align="center" class="allTable">
				<?php foreach ($_SESSION['result'] as $row)
				{ 
				?>	
				<tr>
					<td>Category Name*</td>
					<td>
						<input type="text" class="inputBox" name="name" placeholder="Category Name" value="<?php echo $row['name']; ?>" required="required">
					</td>
				</tr>	
				<tr>
					<td>Type*</td>
					<td>
						<input type="text" class="inputBox" name="type" placeholder="Type" value="<?php echo $row['type']; ?>" required="required">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<br><a type="submit" class="btn" style="text-decoration:none" href="function.php?type=editCategory">Edit Categories</a>
					</td>
				</tr>
			<?php 
		}
				?>	
			</table>
		</form>
	</div>
<?php include_once('footer.php'); ?>