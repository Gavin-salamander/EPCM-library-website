
<?php

include('Header.php');
 ?>

<SECTION id="formcss">
	<div class="container lotofgap ">
		<form action="query/query_new-student.php" method="POST">
			<h1 class="text-center">Add A New Student</h1>
			<input type='text' id='student_id' name="student_id" class="form-control" placeholder="Student Id">
			<input type='text' id='name_student' name="name_student" class="form-control" placeholder="Student Name">
			<input type='int' id='no_of-allocted_cards' name="no_of_allocted_cards" class="form-control" placeholder="Number of the books Allowed">			
			<input type='year' id='year_admission' name="year_admission" class="form-control" placeholder="Year of Admission">
			<button type="submit">
				Submit
			</button>
			<br>
		</form>
    </div>
</SECTION>

<?php
    include("Footer.php");
?>
