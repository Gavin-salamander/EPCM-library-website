
<?php

include('Header.php');
 ?>

<SECTION id="formcss">
	<div class="container lotofgap ">
		<form action="query/query_check-out.php" method="POST">
			<h1 class="text-center">Checking-out Books</h1>
			<input type='text' id='leading_id' name="leading_id" class="form-control" placeholder="Leading Id">
			<input type='text' id='student_id' name="student_id" class="form-control" placeholder="Student Id">
			<input type='text' id='catalog_id' name="catalog_id" class="form-control" placeholder="Catalog Number of the book">
			<input type='date' id='issue_date' name="issue_date" class="form-control" placeholder="Issue Date">
			<button type="submit" class=" " onclick="myFunction()" >
				Submit
			</button>
			<br>
		</form>
    </div>
</SECTION>


<?php
    include("Footer.php");
?>
<?php 
