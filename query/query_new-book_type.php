<?php 
session_start();
include('dbconfig.php');

$book_id=$_POST['book_id'];
$book_name=$_POST['book_name'];
$publisher=$_POST['publisher'];
$Author=$_POST['Author'];
$year_publication=$_POST['year_publication'];

$sql="INSERT INTO lib_book_details(book_id,book_name,year_publication,publisher,Author) VALUES ('$book_id','$book_name','$year_publication','$publisher','$Author')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 ?>