<?php include_once('header.php');?>
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
<table>
 <div class="btnDiv">
  <tr>
   <td></td>
   <td><br>
    <input id="goaddCategory" type="submit" value="Add Category" class="btn">
   </td>
  </tr>
 </div>
</table>
 <table class="data-table">
  <caption>All Category</caption>
	<tr>
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Type</th>
			<th>Create Date</th>
			<th>Modified Date</th>
			<th>Add Image</th>
			<th>Action</th>
		</thead>
	</tr>
	<tbody>
	<?php foreach ($_SESSION['result'] as $datas)
	{ 
	 ?>	
	<tr>
		<td><?php echo $datas['id']; ?></td>
		<td><?php echo $datas['name']; ?></td>
		<td><?php echo $datas['type']; ?></td>
		<td><?php echo $datas['created']; ?></td>
		<td><?php echo $datas['updated']; ?></td>
		<td>
			<a name="addImage" type="submit" value="Add" class="w3-btn w3-border w3-tiny w3-circle w3-blue"> + </a>
		</td>
		<td colspan="2">
			<a  name="editCategory" type="submit" value="<?php echo $datas['id'] ?>;" href="function.php?type=editCategoryDetails" class="w3-button w3-border w3-tiny w3-khaki">Edit
			</a> 
			<a name="deleteCategory" type="submit" value="<?php echo $datas['id'] ?>;" href="function.php?type=deleteCategoryDetails" class="w3-button w3-border w3-tiny w3-red">Delete
			</a>
		</td>
	</tr>
			<?php 
		}
		 ?>
 </tbody>
</table>
<?php include_once('footer.php'); ?>