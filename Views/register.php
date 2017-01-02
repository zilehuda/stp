<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>STP - Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" media="all" href="css/register.css">
    <style type="text/css">

        form { margin: 0px 10px; }



    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="row">
      <div class="panel-body">
  <ul class="nav nav-tabs">
   <li class="active"><a data-toggle="tab" href="#student">Student</a></li>
   <li><a data-toggle="tab" href="#teacher">teacher</a></li>
   </ul>
 </div>
 </div>

 <div class="tab-content">
 <div id="student" class="tab-pane fade in active">
    <div class="container">
		<div class="row">
			<div class="panel panel-primary" style="margin-top: 50px;">
				<div class="panel-body">
          <form class="form-signin" action="../Controller/RegisterController.php">
            <div class="form-group">
  							<h2>Create account</h2>
  						</div>
  						<div class="form-group">
  							<label class="control-label" >first name</label>
  							<input name="fname" id="signupName" type="text" maxlength="50" class="form-control">
  						</div>
              <div class="form-group">
  							<label class="control-label" >last name</label>
  							<input  type="text" maxlength="50" name="lname" class="form-control">
  						</div>
  						<div class="form-group">
  							<label class="control-label" for="signupEmail">Email</label>
  							<input name ="email" id="signupEmail" type="email" maxlength="50" class="form-control">
  						</div>
  						<div class="form-group">
  							<label class="control-label" >Password</label>
  							<input  type="password" name="password" maxlength="25" class="form-control" placeholder="at least 6 characters"
                length="40">
  						</div>
  						<div class="form-group">
                            <input type="hidden" name="student" value="someValue"/>
  							<button id="signupSubmit" type="submit" class="btn btn-info btn-block">Create your account</button>
  						</div>
  						<hr>
  						<p></p>Already have an account? <a href="login.php">Sign in</a>
        <!--  <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
          </form>
				</div>
			</div>
		</div>
	</div>
  </div>
  <!--  tab two -->
  <div id="teacher" class="tab-pane fade in active">
     <div class="container">
     <div class="row">
       <div class="panel panel-primary" style="margin-top: 50px;">
         <div class="panel-body">
           <form class="form-signin" action="../Controller/RegisterController.php">
             <div class="form-group">
                 <h2>Create account</h2>
               </div>
               <div class="form-group">
                 <label class="control-label" name="signupName">Your name</label>
                 <input name="fname" id="signupName" type="text" maxlength="50" class="form-control">
               </div>
               <div class="form-group">
                 <label class="control-label" >last Name</label>
                 <input  name="lname" type="text" maxlength="50" name="username" class="form-control">
               </div>
               <div class="form-group">
                 <label class="control-label" for="signupEmail">Email</label>
                 <input name="email" id="signupEmail" type="email" maxlength="50" class="form-control">
               </div>
               <div class="form-group">
                 <label class="control-label" >Password</label>
                 <input  type="password" name="password" maxlength="25" class="form-control" placeholder="at least 6 characters"
                 length="40">
               </div>
               <div class="form-group">
                   <input type="hidden" name="teacher" value="someValue"/>
                 <button id="signupSubmit" type="submit" class="btn btn-info btn-block">Create your account</button>
               </div>
               
               <hr>
               <p></p>Already have an account? <a href="login.php">Sign in</a>
         <!--  <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
           </form>
         </div>
       </div>
     </div>
   </div>
   </div>

  </div>
  </div>

<script type="text/javascript">

</script>
</body>
</html>
