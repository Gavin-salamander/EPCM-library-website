<?php 
session_start();
include('dbconfig.php');

$leading_id=$_POST['leading_id'];
$student_id=$_POST['student_id'];
$catalog_id=$_POST['catalog_id'];
$issue_date=$_POST['issue_date'];
strrev ( $issue_date );  
$due_date=date('Y-m-d', strtotime($issue_date. ' + 7 days'));



$sql1="INSERT INTO lib_leading(leading_id,student_id,catalog_id,issue_date,due_date) VALUES ('$leading_id','$student_id','$catalog_id','$issue_date','$due_date')";
$sql2="UPDATE lib_catalog SET is_issued = 'Yes' WHERE catalog_id='$catalog_id'";

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" .$sql2 . "<br>" . $conn->error;
}
 ?>