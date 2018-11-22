<?php include_once('header.php');?>
<form name="forgotForm" method="post" action="function.php?type=forgot">
	<table border="0" width="500" align="center" class="forgotTable">
		<tr>
			<td>Email ID</td>
			<td><input type="email" class="email" name="email" required="required"></td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="mail" value="Send Code" class="btnForgot">
			</td>
		</tr>
	</table>
</form>

<?php include_once('footer.php');?>