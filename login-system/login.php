<?php include_once 'header.php' ?>


<form action="inlcudes/login.inc.php" method="post">
  <div class="container center">
    <h1>Log in</h1>

    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Username/Email" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Log in</button>
    </div>
  </div>
</form>


<?php include_once 'footer.php' ?>