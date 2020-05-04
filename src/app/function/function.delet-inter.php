<?php
$servername = "localhost";
$username = "u510206436_bokonzi";
$password = "v3p9r3e@59A";
$dbname = "u510206436_bokonzi";

$id = $_POST["id"] ; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = 'DELETE FROM intervention WHERE intervention_id="'.$id.'"';

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>