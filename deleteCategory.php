  <?php 
include_once('header.php'); 
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
<form name="allForm" id="allForm" method="post" enctype="multipart/form-data" action="">
	 <table width="40%" border="2" align="center" >
    <tr><caption><h3>Delete Category</h3></caption></tr>
    <?php foreach ($_SESSION['result'] as $row)
    { 
    ?>  
    <tr >
      <th>ID </th>
      <td class="content"><?php echo $row['id']; ?></td>
    </tr>
    <tr >
      <th class="label"> Name </th>
      <td class="content"><?php echo $row['name']; ?></td>
    </tr>
    <tr >
      <th class="label">Price</th>
      <td class="content"><?php echo $row['type']; ?></td>
    </tr>
    <tr >
      <th class="label">Create Date</th>
      <td class="content"><?php echo $row['created']; ?></td>
    </tr>
    <tr >
      <th class="label">Update Date</th>
      <td class="content"><?php echo $row['updated']; ?></td>
    </tr>
    <?php
    }
    ?>
    </table>
    <button class="btn" type="submit" name="deleteCategory" >
    Delete
    </button>
<?php include_once('footer.php'); ?>