<?php include_once('header.php'); ?>
<div class="nav">
  <div class="nav-header">
    <div class="nav-title">
      <a href="user_home.php">Cart Home</a>
    </div>
  </div>
  <div class="nav-links">
    <a href="function.php?type=logout">Logout</a>
  </div>
</div>
<div class="container">
  <form name="contactUsForm" id="contactUsForm" method="post" action="function.php?type=contactUsMessage">
  <center><h3 class="title">Contact Us</h3></center>
  <div class="flex-container">
    <div class="column1">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Full Name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required="required">

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Email ID" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required="required">

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write something" value="<?php if(isset($_POST['message'])) echo $_POST['message']; ?>" required="required" style="height:200px"></textarea>

     <input id="submitmessage" type="submit" name="submitmessage" value="Submit" class="w3-btn w3-border w3-tiny w3-circle w3-blue"><br>
     <p id="msg" class="p"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
    </div>
    <div class="column2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.7906828788164!2d-73.98990438495493!3d40.74463114355627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a66b4e9445%3A0x94584e5dc259b569!2sSJ+Innovation+LLC!5e0!3m2!1sen!2sus!4v1542363504404" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </div>
  </div> 
  </form>      
</div>       
<?php include_once('footer.php'); ?>


