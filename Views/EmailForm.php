<?php
session_start();
echo $_SESSION['student_id'];

 ?><!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
     <title>Simple Contact Form - Bootsnipp.com</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     <style type="text/css">
         /* CSS Optional - Only added for benifit of Bootsnipp Output */
 body{padding-top:40px;}
     </style>
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 </head>
 <body>
   <?php require_once 'headerTeacher.php';?>
   	<div class="divider"></div>
   	<div class="content">
 <div class='container'>
     <div class='row'>
         <div class='col-sm-10 col-sm-offset-1'>
             <div class='well'>
                 <form action="../Controller/EmailFormController.php">
                     <div class='row'>
                         <div class='col-sm-4'>
                             <div class='form-group'>
                                 <label for='fname'>First Name</label>
                                 <input type='text' name='fname' class='form-control' required />
                             </div>
                             <div class='form-group'>
                                 <label for='lname'>Last Name</label>
                                 <input type='text' name='lname' class='form-control' required/>
                             </div>

                         </div>
                         <div class='col-sm-8'>
                             <div class='form-group'>
                                 <label for='message'>Message</label>
                                 <textarea class='form-control' name='message' rows='10' required></textarea>
                             </div>
                             <div class='text-right'>
                                 <input style="margin-right:10px" type='submit' class='btn btn-primary' value='Submit' />
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
  </div>
 <script type="text/javascript">

 </script>
 </body>
 </html>
