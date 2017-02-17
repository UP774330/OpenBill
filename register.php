<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="css/maincss.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <div class="row login">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
            <form role="form">
              <div class="form-group text-center">
                <div class="logo">
                    <p>Open Bill</p>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" id="userid" placeholder="Username">
              </div>
			  <div class="form-group">
                <input type="firstname" class="form-control input-lg" id="firstName" placeholder="First Name">
              </div>
			  <div class="form-group">
                <input type="last name" class="form-control input-lg" id="lastname" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="emailaddress" class="form-control input-lg" id="emailAddress" placeholder="Email Address">
              </div>
			  <div class="form-group">
                <input type="password" class="form-control input-lg" id="password" placeholder="Password">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default btn-lg btn-block btn-success">Submit</button>
              </div>
              <div class="form-group last-row">
                <a href="index.html" class="pull-right">Sign In</a>
              </div>
            </form>
        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>