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
<table>
 <div class="btnDiv">
  <tr>
   <td></td>
   <td><br>
    <input id="goaddProduct" type="submit" value="Add Product" class="btn">
   </td>
  </tr>
 </div>
</table>
<form class="all-form" role="form" method="post">
	<table class="data-table">
	<caption>All Products</caption>
		<center><p id="msg" class="p"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p></center>
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Size</th>
			<th>Discription</th>
			<th>Category</th>
			<th>Stock</th>
			<th>Add Img</th>
			<th>Actions</th>
		</thead>
	</tr>
	<tbody>
	<?php foreach ($_SESSION['result'] as $datas)
	{ 
	?>	
	<tr>
		<td><?php echo $datas['id']; ?></td>
		<td><?php echo $datas['name']; ?></td>
		<td><?php echo $datas['price']; ?></td>
		<td><?php echo $datas['size']; ?></td>
		<td><?php echo $datas['disc']; ?></td>
		<td><?php echo $datas['category']; ?></td>
		<td><?php echo $datas['stock']; ?></td>
		<td>
		  <button name="addImage" type="submit" class="w3-btn w3-border w3-tiny w3-circle w3-blue" value="<?php echo $datas['id']; ?>" formaction="function.php?type=getProductById_addImage"> + 
	      </button>
		</td>
		<td colspan="2">
			<button name="editProductDetailsId" type="submit" class="w3-button w3-border w3-tiny w3-khaki" value="<?php echo $datas['id']; ?>" formaction="function.php?type=getProductById_edit"> Edit
	     	</button>
			<button name="deleteProductDetailsId" type="submit" class="w3-button w3-border w3-tiny w3-red" value="<?php echo $datas['id']; ?>" formaction="function.php?type=getProductById_delete"> Delete
	     	</button>
		</td>
	</tr>
	<?php	
	} ?>
	</tbody>
</table>
</form>

<script type="text/javascript">
	    document.getElementById("goaddProduct").onclick = function () {
	        window.location.href = "addProduct.php";
	    };
</script>
<?php include_once('footer.php'); ?>