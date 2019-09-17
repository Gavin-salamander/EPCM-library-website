<?php
	include('query/dbconfig.php');
	
	/*The total number of Books in the Library*/
	$sql1="SELECT COUNT(catalog_id) As total1 FROM lib_catalog";
	$result1 = mysqli_query($conn,$sql1);
	$value1 = mysqli_fetch_assoc($result1);
	$num_rows1 = $value1['total1'];
	
	/*The Total Number of book in Circulation*/
	$sql2="SELECT COUNT(leading_id) As total2 FROM lib_leading";
	$result2 = mysqli_query($conn,$sql2);
	$value2 = mysqli_fetch_assoc($result2);
	$num_rows2 = $value2['total2'];
	
	/*The Total number of Volumes*/
	$sql3="SELECT COUNT(book_id) As total3 FROM lib_book_details";
	$result3 = mysqli_query($conn,$sql3);	
	$value3 = mysqli_fetch_assoc($result3);
	$num_rows3 = $value3['total3'];
	
	/*The Total number of Books OVERDUE*/
	$sql4="SELECT COUNT(leading_id) As total4 FROM lib_leading where due_date > CURDATE() and is_returned = 'No'";
	$result4 = mysqli_query($conn,$sql4);	
	$value4 = mysqli_fetch_assoc($result4);	
	$num_rows4 = $value4['total4'];
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*The Total number of Students*/
	$sql55="SELECT COUNT(student_id) As total55 FROM lib_student";
	$result55 = mysqli_query($conn,$sql55);
	$value55 = mysqli_fetch_assoc($result55);
	$num_rows55 = $value55['total55'];
	
	
?>