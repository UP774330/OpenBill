<?php
require_once('connect.php');

/* Sends an email with a new password to the user, if the username they enter matches with the database. */

if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$sql = "SELECT * FROM `login` WHERE username = '$username'";
	$res = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		$r = mysqli_fetch_assoc($res);
		$password = $r['password'];
		$from = 'From: OpenBill';
		$to = $r['email'];
		$subject = "Your Recovered Password";
		$body = "Please use this password to login " . $password;

		if(mail($to, $subject, $body, $from)){
			$smsg = "Your new password has been sent to your email!";
		}else{
			$fmsg =  "Unable to recover your password, please try again.";
		}

	}else{
		$f2msg =  "Username does not exist in database.";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Open Bill - Forgot Password</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="css/maincss.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($f2msg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $f2msg; ?> </div><?php } ?>
	  <div class="row login">
	      <form class="form-signin" method="POST">
	        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
	          <div role="form">
	            <div class="form-group text-center">
	              <div class="logo">
	                <p>Open Bill</p>
	              </div>

	      <br>
	        <div class "form-group">
	        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" required>
	        </div>
	        <br>
					<div class "form-group">
					<button class="btn btn-default btn-lg btn-block btn-success" type="submit">Forgot Password</button>
					<br>
					</div>
					<div class="form-group">
									<a class="btn btn-default btn-lg btn-block btn-success"href="index.php">Login</a>
								</div>
	        <br>
	      </form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>
