<?php
$first = '';
if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {

$first = 'Wrong Username / Password';
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>STP-login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" media="all" href="css/login.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue</h1>
            <div class="account-wall">
                <img class="profile-img" src="images/logo.png"
                    alt="">
                <form class="form-signin" action="../Controller/loginControllert.php">
                <input name="email" type="text" class="form-control" placeholder="email" required autofocus>
                <input name="password" type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
              <!--  <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
                </form>
            </div>
            <a href="register.php" class="text-center new-account">Create an account </a>
            <h1 class="text-center login-title"><?php echo htmlentities($first); ?></h1>
        </div>

    </div>
</div>
<script type="text/javascript">
</script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
