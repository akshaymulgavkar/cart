<!-- <?php //session_start(); ?>
<!DOCTYPE html> -->
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
<form name="allForm" id="allForm" method="post" action="function.php?type=deleteProductbyId">
  <table width="40%" border="2" >
    <tr><caption><h3>Delete Product</h3></caption></tr>
    <tr >
      <th class="label"> Name </th>
      <td class="content"><?php echo $row['name']; ?></td>
    </tr>
    <tr >
      <th class="label">Price</th>
      <td class="content"><?php echo $row['price']; ?></td>
    </tr>
    <tr >
      <th class="label">Desc</th>
      <td class="content"><?php echo $row['disc']; ?></td>
    </tr>
    <tr >
      <th class="label">Category</th>
      <td class="content"><?php echo $row['category']; ?></td>
    </tr>
    </table>
    <button class="btn" type="submit" name="deleteProduct" value="<?php echo $row['id']; ?>" >
    Delete
    </button>
  </form>
  </div>
<?php include_once('footer.php'); ?>