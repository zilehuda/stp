<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- for a teacher-->
    <title>Beautiful image card with description - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
    padding: 20px;
    font-family: 'Open Sans', sans-serif;
    background-color: #f7f7f7;
}

.lib-panel {
    margin-bottom: 20Px;
}
.lib-panel img {
    width: 50%;
    background-color: transparent;
}

.lib-panel .row,
.lib-panel .col-md-6 {
    padding: 0;
    background-color: #FFFFFF;
}


.lib-panel .lib-row {
    padding: 0 20px 0 20px;
}

.lib-panel .lib-row.lib-header {
    background-color: #FFFFFF;
    font-size: 20px;
    padding: 10px 20px 0 20px;
}

.lib-panel .lib-row.lib-header .lib-header-seperator {
    height: 2px;
    width: 26px;
    background-color: #d9d9d9;
    margin: 7px 0 7px 0;
}

.lib-panel .lib-row.lib-desc {
    position: relative;
    height: 100%;
    display: block;
    font-size: 13px;
}
.lib-panel .lib-row.lib-desc a{
    position: absolute;
    width: 100%;
    bottom: 10px;
    left: 20px;
}

.row-margin-bottom {
    margin-bottom: 20px;
}

.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
}

.no-padding {
    padding: 0;
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="well well-sm">
      <strong> My Review </strong>

  </div>
    <hr>
            <div class="row row-margin-bottom ">


              <?php
              $teacher_id = $_SESSION["teacher_id"];

              include('../connection.php');
              $query = "select s.first_name,f.fback
                        from student s,course c,feedback f where c.teacher_id='$teacher_id' and
                        f.course_id= c.course_id and s.student_id=f.student_id";

              $stmt = sqlsrv_query( $conn, $query );
              while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {


                 ?>

            <div class="col-md-5 no-padding lib-item"   data-category="view">
                <div class="lib-panel" style='padding-left: 20px';>
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show" src="images/student.png">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                <?php echo $row['first_name']; ?>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc" style="padding-bottom: 15px;">
                                  <h5>Review: <?php echo $row['fback']; ?></h1>
                              </div>

                            </div>

                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
