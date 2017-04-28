<?php
/* Initiates connect.php and sets the variables to log in, encrypting the password. */

session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = md5($_POST['password']);

 /* Checks if username and password matches with username and password from the database. */
  
  $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connection, $sql);
  $count = mysqli_num_rows($result);
 if($count == 1){
    $_SESSION['username'] = $username;
  }else{
    $fmsg = "Invalid Username/Password";
    }
  }

 /* Once logged in, redirects the user to the main menu. */
  
if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  header('Location: menu.html');
}
 ?>

<html>
<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="maincss.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
  <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
  <div class="row login">
      <form class="form-signin" method="POST">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
          <div role="form">
            <div class="form-group text-center">
              <div class="logo">
                <p>Open Bill</p>
              </div>

      <div class "form-group">
	      <input type="text" name="username" class="form-control input-lg" placeholder="Username" required>
      </div>
      <br>
        <div class "form-group">
        <input type="password" name="password" id="inputPassword" class="form-control input-lg" placeholder="Password" required>
        </div>
        <br>
        <div class "form-group">
        <button class="btn btn-default btn-lg btn-block btn-success" type="submit">Login</button>
        </div>
        <br>
        <div class="form-group last-row">
          <a href="register.php" class="pull-left">Create Account</a>
        </div>
        <div class="form-group last-row">
          <a href="forgotpassword.php" class="pull-right">Forgot Password</a>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
