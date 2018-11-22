<?php include_once('header.php'); 
?>
<div class="signupDiv">
<form name="signupForm" id="signupForm" method="post" action="function.php?type=signup">
	<table border="0" width="500" align="center" class="signupTable">
		<caption><h3>Register</h3></caption>
			<td>
				<p id="msg" class="p"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
			</td>
		<tr>
			<td>First Name*</td>
			<td><input type="text" class="inputBox" name="first_name" placeholder="First Name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required="required"></td>
		</tr>
		<tr>
			<td>Last Name*</td>
			<td><input type="text" class="inputBox" name="last_name" placeholder="Last Name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required="required"></td>
		</tr>
		<tr>
			<td>Email ID*</td>
			<td><input type="email" class="inputBox" name="email" placeholder="Email ID" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required="required"></td>
		</tr>
		<tr>
			<td>Gender*</td>
			<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?> > Male
			<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
			<input type="radio" name="gender" value="Other" <?php if(isset($_POST['gender']) && $_POST['gender']=="Other") { ?>checked<?php  } ?> required="required"> Other
			</td>
		</tr>
		
		<tr>
			<td>H.No/AptNo</td>
			<td><input type="text" class="inputBox" name="hno" placeholder="House No/Aprt No" value="<?php if(isset($_POST['hno'])) echo $_POST['hno']; ?>"></td>
		</tr>
		<tr>
			<td>Street*</td>
			<td><input type="text" class="inputBox" name="street" placeholder="Street Name" value="<?php if(isset($_POST['street'])) echo $_POST['street']; ?>" required="required"></td>
		</tr>
		<tr>
			<td>City*</td>
			<td><input type="text" class="inputBox" name="city" placeholder="City" value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>" required="required"></td>
		</tr>
		<tr>
			<td>Zipcode*</td>
			<td><input type="text" class="inputBox" name="zipcode" placeholder="Zipcode" value="<?php if(isset($_POST['zipcode'])) echo $_POST['zipcode']; ?>" required="required"></td>
		</tr>
		<tr>
			<td>State*</td>
			<td><input type="text" class="inputBox" name="state" placeholder="State" value="<?php if(isset($_POST['state'])) echo $_POST['state']; ?>" required="required"></td>
		</tr>
		<tr>
			<td>Country*</td>
			<td><input type="text" class="inputBox" name="country" placeholder="Country" value="<?php if(isset($_POST['country'])) echo $_POST['country']; ?>" required="required"></td>
		</tr>
		<tr>
			<td>Telephone*</td>
			<td><input type="number" class="inputBox" name="telephone" placeholder="Mobile No" value="<?php if(isset($_POST['telephone'])) echo $_POST['telephone']; ?>" required="required"></td>
		</tr>
		<tr>
			<td>Fax</td>
			<td><input type="text" class="inputBox" name="fax" placeholder="Fax No"value="<?php if(isset($_POST['fax'])) echo $_POST['fax']; ?>"></td>
		</tr>
		<tr>
			<td>Password*</td>
			<td><input id="password" type="password" class="inputBox" name="password" placeholder="Password" required="required"></td>
		</tr>
		<tr>
			<td>Confirm Password*</td>
			<td><input id="confirmpassword" type="password" class="inputBox" name="confirm_password" placeholder="Confirm Your Password" required="required" onkeyup='check();'><div id='message'></div></td>
		</tr>
		<div class="btnRegDiv">
			<tr>
				<td></td>
				<td>
					<input id="register" type="submit" name="register" value="Register" class="btnRegister">
				</td>
			</tr>
		</div>
		
	</table>
</form>
</div>
<script type="text/javascript">
var check = function() {
  if (document.getElementById('password').value == document.getElementById('confirmpassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matched!!';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password do not match!!';
  }
}
</script>
<?php include_once('footer.php'); ?>