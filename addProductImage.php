<?php session_start(); ?>
<!DOCTYPE html>
<?php include_once('header.php');
      // require_once('classes/productClass.php');
      // $productObj = new PRODUCT();
      // $productInfo = $productObj->getproductById($datas['result']['id']);
      // echo json_encode($productInfo);
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
<form name="allForm" id="allForm" method="post" enctype="multipart/form-data" action="function.php?type=addImage">
  <table width="40%" border="2" >
    <tr><caption><h3>Add Product Image</h3></caption></tr>
    <?php foreach ($_SESSION['result'] as $row)
    { 
    ?>  
    <tr>
    <tr>
      <th class="label"> Name </th>
      <td class="content"><?php echo $row['name']; ?></td>
    </tr>
      <th class="label">Category</th>
      <td class="content"><?php echo $row['category']; ?></td>
    </tr>
    <?php
    }
    ?>
    </table>
    <center>
      <label for="image">Image:<input type="file" name="image" /></label><br>
      <input name="addImage" type="submit" value="Upload">
    </center>
  </form>
  </div>
<?php include_once('footer.php'); ?>