
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'ttn_demo_db';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM pollution_monitor ORDER BY nodeID DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Pollution Monitor Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Pollution Monitor Details</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>NodeID</th>
				<th>sensorID</th>
				<th>ParaID</th>
				<th>paravalue1</th>
                <th>paravalue2</th>
                <th>paravalue3</th>
                <th>paravalue4</th>
                <th>Timestamp</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows["nodeID"];?></td>
				<td><?php echo $rows["sensorID"];?></td>
				<td><?php echo $rows["paraID"];?></td>
				<td><?php echo $rows["paravalue1"];?></td>
                <td><?php echo $rows["paravalue2"];?></td>
                <td><?php echo $rows["paravalue3"];?></td>
                <td><?php echo $rows["paravalue4"];?></td>
                <td><?php echo $rows["timestamp"];?></td>

			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
