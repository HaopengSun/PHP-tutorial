<?php include_once 'header.php' ?>


<form action="includes/signup.inc.php" method="post">
  <div class="container center">
    <h1>Sign Up</h1>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="uid"><b>Username</b></label>
    <input type="text" placeholder="Enter User Name" name="uid" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

    <label for="pswrepeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pwdrepeat" required>

    <div class="clearfix">
      <button type="button" class="cancelbtn" >Cancel</button>
      <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>
  </div>
</form>


<?php include_once 'footer.php' ?>