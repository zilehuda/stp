<?php


 function CourseBox()
{
  $teacher_id = $_SESSION["teacher_id"];
  include('../connection.php');
  $query = "select course_id,course_title,course_description from course where teacher_id='$teacher_id'";
  $stmt = sqlsrv_query( $conn, $query );
  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
  echo '  <div class="item  col-xs-4 col-lg-4">
        <div class="thumbnail">
            <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
            <div class="caption">
                <h4 class="group inner list-group-item-heading">'.$row['course_title'].
                  '</h4>
                <p class="group inner list-group-item-text">'.$row['course_description'].
                    '</p>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <p class="lead">
                            $21.000</p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <a class="btn btn-success" href="">Edit</a>
                        <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>';
        //echo $row['course_title'].", ".$row['course_description']."<br />";
  }
}
function DeleteCourse($course_id)
{

  $course_id = $course_id;
echo $course_id;
  //include('../connection.php');
  //$query = "delete from course where course_id='$course_id'";
  //$stmt = sqlsrv_query( $conn, $query );


}



?>