<?php
$host = 'localhost';
$dbuser='username';
$dbpass='password';
$dbname = 'database name';
$conn = pg_connect("host=localhost port=5432 dbname=databasename user=username password=password");

function db_get($sql) {
	//ZA SELECT
	global $conn;
	$result = pg_query($conn, $sql);
	return pg_fetch_all($result);
}

function db_write($sql) {
	// ZA INSERT, UPDATE ili DELETE
	global $conn;
	return pg_query($conn, $sql);
}
?>