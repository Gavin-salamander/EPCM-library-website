
<?php

include('Header.php');
 ?>

<SECTION id="formcss">
	<div class="container lotofgap ">
		<div class="row">		
			<h1>Adding New Entries</h1>
                <div class="col-sm-4">
					<form action="Add_new_book_type.php" method="get" >
						<button type="submit">Adding New Book Type</button>
					</form>
				</div>
				<div class="col-sm-4">
					<form action="Add_new_book.php" method="get" >
						 <button type="submit">Adding New Book</button>
					</form>
				</div>
				<div class="col-sm-4">
					<form action="Add_new_student.php" method="get" >
						 <button type="submit">Adding New Student</button>
					</form>
				</div>
			</div>
	</div>
</SECTION>

<?php
    include("Footer.php");
?>
