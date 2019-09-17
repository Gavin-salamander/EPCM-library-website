<?php 
session_start();
include('dbconfig.php');

$book_id=$_POST['book_id'];
$catalog_id=$_POST['catalog_id'];

$sql="INSERT INTO lib_catalog(book_id,catalog_id) VALUES ('$book_id','$catalog_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 ?>