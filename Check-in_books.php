
<?php

include('Header.php');
 ?>

<SECTION id="formcss">
	<div class="container lotofgap ">
		<form action="query/query_check-in.php" method="POST">
			<h1 class="text-center">Checking-In Books</h1>
			<input type='text' id='leading_id' name="leading_id" class="form-control" placeholder="Lending ID">
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
