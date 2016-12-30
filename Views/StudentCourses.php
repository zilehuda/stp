<?php


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>List Grid View - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="well well-sm">
        <strong>My Courses courses</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
    <div id="products" class="row list-group">
      <?php

      include('../connection.php');
      $student_id = $_SESSION['student_id'];

      $query = "select course_id,course_title,course_description from course where course_id in
      (select course_id from student_course where student_id = '$student_id')";
      $stmt = sqlsrv_query( $conn, $query );
      while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

         ?>
      <div class="item  col-xs-4 col-lg-4">
          <div class="thumbnail">
              <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
              <div class="caption">
                  <h4 class="group inner list-group-item-heading">
                      <?php echo $row['course_title']; ?></h4>
                  <p class="group inner list-group-item-text">
                      <?php echo $row['course_description']; ?></p>
                  <div class="row">
                      <div class="col-xs-12 col-md-6">
                          <p class="lead">
                              $21.000</p>
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <a name="delete" class="btn btn-success"
                        href="">Enrolled</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <?php  } ?>

    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>
</body>
</html>
