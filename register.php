<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if(isset($_POST) & !empty($_POST)){
			$username = mysqli_real_escape_string($connection, $_POST['username']);
			$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
			$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
			$email = mysqli_real_escape_string($connection, $_POST['email']);
			$password = md5($_POST['password']);

        $query = "INSERT INTO `login` (username, firstname, lastname, email, password) VALUES ('$username', '$firstname', '$lastname', '$email', '$password')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
<html>
<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>

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
  <div class="row login">
      <form class="form-signin" method="POST">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
          <div role="form">
            <div class="form-group text-center">
              <div class="logo">
                <p>Open Bill</p>
              </div>

      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <div class "form-group">
	      <input type="text" name="username" class="form-control input-lg" placeholder="Username" required>
      </div>
			<br>
      <div class "form-group">
        <input type="text" name="firstname" id="inputFirstName" class="form-control input-lg" placeholder="First Name" required>
      </div>
			<br>
      <div class "form-group">
        <input type="text" name="lastname" id="inputLastName" class="form-control input-lg" placeholder="Last Name" required>
        </div>
				<br>
        <div class "form-group">
        <input type="email" name="email" id="inputEmail" class="form-control input-lg" placeholder="Email address" required autofocus>
        </div>
				<br>
        <div class "form-group">
        <input type="password" name="password" id="inputPassword" class="form-control input-lg" placeholder="Password" required>
        </div>
				<br>
        <div class "form-group">
        <button class="btn btn-default btn-lg btn-block btn-success" type="submit">Register</button>
        </div>
				<br>
        <div class "form-group">
        <a class="btn btn-default btn-lg btn-block btn-success" href="login.php">Login</a>
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
