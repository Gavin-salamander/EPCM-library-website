
<?php

include('Header.php');
 ?>

<SECTION id="formcss">
	<div class="container lotofgap">
		<div class="row">		
			<h1>Welcome To Library Management System</h1>
                <div class="col-sm-3">
					<form action="Add_new_entries.php" method="get" >
						<button type="submit">Adding New Entries</button>
					</form>
				</div>
				<div class="col-sm-3">
					<form action="Check-out_books.php" method="get" >
						 <button type="submit">For Cheching Books Out</button>
					</form>
				</div>
				<div class="col-sm-3">
					<form action="Check-in_books.php" method="get" >
						 <button type="submit">For Cheching Books In</button>
					</form>
				</div>
				<div class="col-sm-3">
					<form action="Check-database.php" method="get" >
						 <button type="submit">Database Statistics</button>
					</form>
				</div>
			</div>
	</div>
</SECTION>

<?php
    include("Footer.php");
?>
