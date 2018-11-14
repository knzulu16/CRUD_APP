
<?php
require_once('DBconnect.php');
?>
<?php $name = "" ?>

<form class="form-control" action="logout.php" method="post">
  Email:<input class="form-control" type="email" name="" value="" required>
  Password:<input type="password" class="form-control" name="password" required autofocus>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>

<?php
  echo $name;
?>

<a href="register.php">Register</a>
