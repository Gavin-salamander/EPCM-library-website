<?php

include('Header.php');
include('query/query_check_database.php');

 ?>

<SECTION id="formcss">
	<div class="container  " style="overflow-x:auto;">
		<h1> Database Statistics <h1>
		<table>
			<tr>
				<th>Particulars</th>
				<th>Quantity</th>
			</tr>
			
			<tr>
				<td>The Total number of Books in the Library</td>
				<td>
					<?php
						echo $num_rows1			
					?>
				</td>
			</tr>
			
			<tr>
				<td>The Total Number of book in Circulation</td>
				<td>
					<?php
						echo $num_rows2			
					?>
				</td>
			</tr>
			
			<tr>
				<td>The Total number of Volumes</td>
				<td>
					<?php
						echo $num_rows3		
					?>
				</td>
			</tr>
			
			<tr style= "background-color:pink;">
				<td>The Total number of Books OVERDUE</td>
				<td>
					<?php
						echo $num_rows4	
					?>
				</td>
			</tr>
			
			<tr>	
				<td>The Total number of Students</td>
				<td>
					<?php
						echo $num_rows55		
					?>
				</td>
			</tr>
			
		</table>
		
		<div class="row">				
			<div class="col-sm-6">
				<form action="overdue_books.php" target="_blank" method="get" >
					<button type="submit">List Of OVERDUE Books</button>
				</form>
			</div>
			<div class="col-sm-6">
				<form action="Add_new_entries.php" target="_blank" method="get" >
					<button type="submit">Add New Entries</button>
				</form>
			</div>
		</div>
		<div class="row">				
			<div class="col-sm-6">
				<form action="Check-out_books.php" target="_blank" method="get" >
					<button type="submit">Checking-out Books</button>
				</form>
			</div>
			<div class="col-sm-6">
				<form action="Check-in_books.php" target="_blank" method="get" >
					 <button type="submit">Checking-in Books</button>
				</form>
			</div>
		</div>
		
	</div>
</SECTION>




<?php
    include("Footer.php");
?>