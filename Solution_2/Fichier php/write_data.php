<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//$sql = "INSERT INTO test.sensor (value) VALUES ('".$_GET["value"]."')";    
$sql = "INSERT INTO sensor (temp, hum) VALUES (('".$_GET["temp"]."'), ('".$_GET["hum"]."'))";
    // Execute SQL statement

    if (mysqli_query($conn, $sql)) {
  		echo "New record created successfully";
	} 
	else {
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
