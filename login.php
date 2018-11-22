<?php include_once('header.php'); 
session_start();
if(!empty($_SESSION['result']['id'])) {
header('location:user_home.php');
}
?>
<div class="loginDiv">
<center><b><h4>User Login</h4></b></center>
	<form name="loginForm" id="loginForm" method="post" action="function.php?type=login" >
			
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
			<input id="signup" type="submit" name="signup" value="Register" class="btnSignup">
			</td>
			<td>
			<input id="login" type="submit" name="login" value="Log-In" class="btnLogin">
			</td>
		</tr>
		<tr>
			<td>
			<input id="forgot" type="submit" value="Forgot Passowrd" class="btnForgot">
			</td>
		</tr>
	</table>
	<p id="msg" class="p"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
</form>
</div>


<script type="text/javascript">
    document.getElementById("forgot").onclick = function () {
        window.location.href = "forgot.php";
    };
    document.getElementById("signup").onclick = function () {
        window.location.href = "signup.php";
    };

    document.body.addEventListener("keydown", function (event) {
    if (event.ctrlKey && event.keyCode === 65) {
        window.location.replace("admin_login.php");
    }
	});
</script>
<?php include_once('footer.php'); ?>
