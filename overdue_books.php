
<?php

include('Header.php');
include('query/query_check_database.php');
 ?>

<SECTION >
	<div class = "container lotofgap" >
	<h1>Overdue Student Details<h1>	
		<?php
			echo "<table style='border: solid 1px black;'>";
			echo "<tr><th>Name of student</th><th>Student ID</th><th>Lending ID</th><th>Catalog ID</th></tr>";

			class TableRows extends RecursiveIteratorIterator {
				function __construct($it) {
					parent::__construct($it, self::LEAVES_ONLY);
				}

				function current() {
					return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
				}

				function beginChildren() {
					echo "<tr>";
				}

				function endChildren() {
					echo "</tr>" . "\n";
				}
			}

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "epcm-library-website";

			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$stmt = $conn->prepare("SELECT lib_student.name_student ,lib_leading.student_id, lib_leading.leading_id, lib_leading.catalog_id   FROM lib_leading INNER JOIN lib_student WHERE lib_leading.due_date > CURDATE() and lib_leading.is_returned = 'No' And lib_leading.Student_id = lib_student.Student_id");
				$stmt->execute();

				// set the resulting array to associative
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
					echo $v;
				}
			}
			catch(PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$conn = null;
			echo "</table>";
		?>
		
		<h4>The Total number of Books OVERDUE: <?php						echo $num_rows4					?>  </h4>		
		
		</div>
</SECTION>

<?php
    include("Footer.php");
?>


