<?php

require_once('../dados_banco.php');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM authors WHERE authorid=3";

if(mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
}
else {
    echo "Error deleting record: ".mysqli_error($conn);
}

mysqli_close($conn);