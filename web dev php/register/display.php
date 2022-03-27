   <?php
$mysqli = new mysqli("localhost", "root", "", "vivek");

if ($mysqli ==  false) {
	die("ERROR: Could not connect. "
	.$mysqli->connect_error);
}

$sql = "SELECT * FROM d1";
if ($res = $mysqli->query($sql)) {
	if ($res->num_rows > 0) {
		echo "<table>";
		echo "<tr>";
		//echo "<th>ID</th>";
		echo "<th>Email</th>";
		echo "<th>Password</th>";
		echo "</tr>";
		while ($row = $res->fetch_array())
		{
			echo "<tr>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Password']."</td>";
			
			echo "</tr>";
		}
		echo "</table>";
		$res->free();
	}
	else {
		echo "No matching records are found.";
	}
}
else {
	echo "ERROR: Could not able to execute $sql. "
											.$mysqli->error;
}
$mysqli->close();
?>

