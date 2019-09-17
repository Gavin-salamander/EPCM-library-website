<?php 
session_start();
include('dbconfig.php');

$student_id=$_POST['student_id'];
$name_student=$_POST['name_student'];
$no_of_allocted_cards=$_POST['no_of_allocted_cards'];
$year_admission=$_POST['year_admission'];

$sql="INSERT INTO lib_student(student_id,name_student,no_of_allocted_cards,year_admission) VALUES ('$student_id','$name_student',$no_of_allocted_cards,'$year_admission')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 ?>