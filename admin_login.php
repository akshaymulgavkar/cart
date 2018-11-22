<?php include_once('header.php'); 
session_start();
if(!empty($_SESSION['result']['id'])) {
header('location:admin_home.php');
}
?>
<div class="loginDiv">
<center><b><h4>Admin Login</h4></b></center>
	<form name="loginForm" id="loginForm" method="post" action="function.php?type=adminlogin" >
			
	<table border="0" width="500" align="center" class="loginTable">

		<tr>
			<td>Email ID</td>
			<td><input type="email" class="email" name="email" placeholder="Email ID" required="required"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" class="password" name="password" placeholder="Password" required="required"></td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="adminlogin" value="Admin Login" class="btnLogin">
			</td>
		</tr>
	</table>
	<p id="msg" class="p"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
</form>
</div>

<?php include_once('footer.php'); ?>
