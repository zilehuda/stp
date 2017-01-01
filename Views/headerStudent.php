<?php

?>
<head>
	<meta charset="utf-8">
	<title>STUDENT TEACHER PORTAL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">

</head>
<body>
	<header id="header">
		<div class="container">
			<a href="Studenthome.php" id="logo" title="HarrisonHighSchool">HarrisonHighSchool</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="studenthome.php">Home</a></li>
					<li><a href="StudentCourse.php">My Courses</a></li>
 				</ul>
				<ul style="padding-right:20px">

  <?php
  if($_SESSION['logged']==true)
    {
			echo '<li><a href="">Post a Request</a></li>';


      echo '<li><a href="Studentprofile.php">'.$_SESSION["username"].'</a></li>';
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
</body>
	<!-- / header -->
