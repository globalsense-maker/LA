<?php
/// edit data
if(isset($_POST['courseName']) && isset($_POST['submit'])){
    $courseId= $_POST['courseName'];
    $query ="SELECT fullName, courseName FROM students WHERE courseId='$courseId'";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $students= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }else{
     $students=[];
    }
}
?>