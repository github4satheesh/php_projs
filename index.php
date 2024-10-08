<!DOCTYPE html>
<html>
<head>
	<title>MySQL Table Viewer - Title</title>
</head>
<body>
	<h1>MySQL Table Viewer Products - Satheesh New</h1>
<?php
$host = 'csksqlserver1.mysql.database.azure.com';
$username = 'cskadmin';
$password = '@dminpwd123';
$db_name = 'mysql';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//Run the Update statement
$product_name = 'BrandNewProduct';
$new_product_price = 15.1;
if ($stmt = mysqli_prepare($conn, "UPDATE Products SET Price = ? WHERE ProductName = ?")) {
mysqli_stmt_bind_param($stmt, 'ds', $new_product_price, $product_name);
mysqli_stmt_execute($stmt);
printf("Update: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));

//Close the connection
mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
</body>
</html>
