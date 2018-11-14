<?php
session_start();
require_once('DBconnect.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    // If the values are posted, insert them into the database

    ?>
    <div class="container">
      <form action="login.php" class="form-signin" method="POST">

        <h2 class="form-signin-heading">Please Register</h2>
          <div class="input-group">
    	    <span class="input-group-addon" id="basic-addon1">@</span>
    	    <input type="text" name="username" class="form-control" placeholder="Username" required>
    	    </div>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>
          <a class="btn btn-lg btn-primary btn-block" name= "submit" href="login.php">Login</a>
      </form>
</div>

  </body>
</html>
