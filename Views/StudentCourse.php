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

	<?php require_once 'headerStudent.php'; ?>
	<div class="divider"></div>

	<div class="content">

			<?php require_once 'EnrolledCourses.php';?>

			  <!-- start of review section -->
				<div class="container">
			  <div class="well well-sm">
			      <strong> My Students </strong>

			  </div>
			    <hr>
				<div class="row" style="margin-top:40px;">
			    <?php

			    include('../connection.php');
			    $query = "select t.first_name,c.course_title,cc.course_id from teacher t,course c,CompCourse cc where
										cc.course_id=c.course_id and t.teacher_id=c.teacher_id and cc.student_id='1' and cc.f_check='f'";

			    $stmt = sqlsrv_query( $conn, $query );
			    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
			       ?>
			    <!-- start -->
					<div class="col-md-6">
			    	<div class="well well-sm">

			            <div class="text-right">
			                <h4 style="float:left">
			                    teacher name: <?php echo $row['first_name']; ?>, course: <?php echo $row['course_title']; ?>
			                </h4>
											<a name="delete" class="btn btn-success"
											href="../Controller/ReviewController.php?val=review_request&course_id=<?php echo $row["course_id"];?>
											&course_title=<?php echo $row["course_title"];?>">
											leave a review</a>
			            </div>

			        </div>
					</div>
			    <!-- end -->
			    <?php } ?>

				</div>
				</div>
				  <!-- end of review-->

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
	<script src="js/review.js"></script>

</body>
</html>
