<!DOCTYPE html>
<html>
<head>
	<title>MySQL Table Viewer - Title</title>
</head>
<body>
	<h1>MySQL Table Viewer - Satheesh New</h1>
	<?php
		// Define database connection variables
		$host = 'csksqlserver1.mysql.database.azure.com';
		$username = 'cskadmin';
		$password = '@dminpwd123';
		$db_name = 'mysql';

		// Create database connection
		//$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//Run the Select query
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM Employee');
while ($row = mysqli_fetch_assoc($res)) {
var_dump($row);
}

//Close the connection
mysqli_close($conn);

	?>
</body>
</html>
