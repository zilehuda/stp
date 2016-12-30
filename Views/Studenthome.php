<?php
session_start();
// Right at the top of your script
?>


<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>STUDENT TEACHER PORTAL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="index.html" id="logo" title="HarrisonHighSchool">HarrisonHighSchool</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="events.html">Courses</a></li>
					<li><a href="gallery.html">Students</a></li>
					<li><a href="events.html">Events</a></li>
 				</ul>
				<ul>
					<li><a href="gallery.html">Teachers</a>
						<li class='active' style='float:right;'>
  <?php
  if($_SESSION['logged']==true)
    {
      echo '<li><a>'.$_SESSION["username"].'</a></li>';
      echo '<li><a href="../Controller/logout.php">logout</a></li>';

    }
  elseif($_SESSION['logged']==false)
    {
      echo '<a href="registerform.html"><span>Login/Register</span></a></li>';
    }
  ?>
</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->

	</header>
	<!-- / header -->

	<div class="divider"></div>

	<div class="content">

			<?php require_once 'StudentCourses.php';?>
			<?php require_once 'CourseSelect.php';?>
	</div>

	<footer id="footer">

	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
