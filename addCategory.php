<?php include_once('header.php'); ?>
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
	<form method="post" action="function.php?type=addCategory">
	<table>
		<caption>Add New Category</caption>
			<td>
				<p id="msg" class="p"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
			</td>
		<tr>
			<td>Category Name*</td>
			<td><input type="text" class="inputBox" name="name" placeholder="Category Name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required="required"></td>
		</tr>	
		<tr>
			<td>Category Type*</td>
			<td><input type="text" class="inputBox" name="type" placeholder="Type" value="<?php if(isset($_POST['type'])) echo $_POST['type']; ?>" required="required"></td>
		</tr>
		<div class="btnDiv">
			<tr>
				<td></td>
				<td><br>
					<input id="addCategory" type="submit" name="addCategory" value="Add Category" class="btn">
				</td>
			</tr>
		</div>
	</table>
</form>
</div>
<?php include_once('footer.php'); ?>