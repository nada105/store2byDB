<!--to connect DB by PHP FILE-->
<?php

include "navbar.php";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store2bydb";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection

//de method mn el calss mo7mt7a enha tkt4f hal f error wla la lo f btz7rly message
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>