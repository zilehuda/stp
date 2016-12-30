<?php

?>
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
			<a href="teacherhome.php" id="logo" title="HarrisonHighSchool">HarrisonHighSchool</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="AddCourse.php">Add Course</a></li>
					<li><a href="gallery.html">add quiz</a></li>
 				</ul>
				<ul style="padding-right:20px">

  <?php
  if($_SESSION['logged']==true)
    {
			echo '<li><a href="">My Students</a></li>';


      echo '<li><a href="teacherProfile.php">'.$_SESSION["username"].'</a></li>';
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
