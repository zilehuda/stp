<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Form Wizard and validation - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" media="all" href="css/courseform.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php require_once 'headerstudent.php';?>
  <div class="divider"></div>
  <h1 style="padding-left: 35%;">Kindly Give us a review for <?php echo $_GET['course_title']; ?></h1>
  <div class="container">

<form role="form" action="../Controller/ReviewController.php">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Your Review</h3>
                <div class="form-group">
                    <label class="control-label"></label>
                    <input name="msg" maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Title"  />
                </div>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>

</form>
</div>
</body>
</html>
