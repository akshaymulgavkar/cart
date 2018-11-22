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
<div class="outDiv">
  <div class="inDiv">
    <form name="allForm" class="allForm" method="post" enctype="multipart/form-data" action="function.php?type=addProduct">
  <table>
    <caption>EDIT PRODUCT</caption>
      <!-- <td>
        <p id="msg" class="p"><?php //echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
      </td> -->
    <tr>
      <td>Name*</td>
      <td><input type="text" class="inputBox" name="product_name" placeholder="Product Name" value="<?php echo $row['product_name']; ?>" required="required"></td>
    </tr>
    <tr>
      <td>Price*</td>
      <td><input type="text" class="inputBox" name="price" placeholder="Price" value="<?php echo $row['price']; ?>" required="required"></td>
    </tr>
    <tr>
      <td>Size*</td>
      <td><input type="text" class="inputBox" name="size" placeholder="Size" value="<?php echo $row['size']; ?>" required="required"></td>
    </tr>
    
    <tr>
      <td>Discription*</td>
      <td><input type="text" class="inputBox" name="disc" placeholder="Description" value="<?php echo $row['disc']; ?>" required="required"></td>
    </tr>
    <tr>
      <td>Stock*</td>
      <td><input type="text" class="inputBox" name="stock" placeholder="Stock" value="<?php echo $row['stock']; ?>" required="required"></td>
    </tr>
    <tr>
      <td>Category*</td>
      <td>
        <select name="category" id="soflow" value="<?php echo $category; ?>" required>
            <option value="">Select Category:</option>
            <option value="Cloths">Misc</option>
            <option value="Cloths">Cloths</option>
            <option value="Electronics">Electronics</option>
            <option value="Books">Books</option>
            <option value="Home Appliances">Home Appliances</option>
         </select>
      </td>
    </tr>
    <div class="btnDiv">
      <tr>
        <td></td>
        <td><br>
          <input id="addProduct" type="submit" name="addProduct" value="Edit Product Details" class="btn">
        </td>
      </tr>
    </div>
  </table>
</form>
  </div>
</div>
<?php include_once('footer.php'); ?>