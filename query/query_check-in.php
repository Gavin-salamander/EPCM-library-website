<?php 
session_start();
include('dbconfig.php');

$leading_id=$_POST['leading_id'];

$sql1="UPDATE lib_leading SET is_returned = 'Yes' WHERE leading_id='$leading_id'";
$sql2="UPDATE lib_catalog SET is_issued = 'No' WHERE catalog_id='$catalog_id'";

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" .$sql2 . "<br>" . $conn->error;
}
 ?>