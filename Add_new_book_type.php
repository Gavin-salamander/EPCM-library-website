
<?php

include('Header.php');
 ?>

<SECTION id="formcss">
	<div class="container lotofgap ">
		<form action="query/query_new-book_type.php" method="POST">
			<h1 class="text-center">Add A New Book Type</h1>
			<input type='text' id='book_id' name="book_id" class="form-control" placeholder="Book Id">
			<input type='text' id='book_name' name="book_name" class="form-control" placeholder="Book Name">
			<input type='text' id='publisher' name="publisher" class="form-control" placeholder="Publisher Name">
			<input type='text' id='Author' name="Author" class="form-control" placeholder="Authors">
			<input type='year' id='year_publication' name="year_publication" class="form-control" placeholder="Year Of Publication">
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
