
<?php

include('Header.php');
 ?>

<SECTION id="formcss">
	<div class="container lotofgap ">
		<form action="query/query_new-book.php" method="POST">
			<h1 class="text-center">Add A New Book</h1>
			<input type='text' id='catalog_id' name="catalog_id" class="form-control" placeholder="Catalog Number">
			<input type='text' id='book_id' name="book_id" class="form-control" placeholder="Book ID">			
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
<?php 
