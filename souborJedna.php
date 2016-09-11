<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "objednavky";

// pripojeni k databazy
$conn = mysqli_connect($servername, $username, $password, $dbname);
// kontrola
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into person (id, jmeno, prijmeni, pozice)
	    values (1, 'honza', 'malasek', 'programator')";

if ($conn->query($sql) === TRUE) {
	echo "New record created succesfully";
	}
		else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	
	
	
	
?>
