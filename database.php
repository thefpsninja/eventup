<?php
$servername = "localhost";
$username = "root";
$password = "mysql";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS eventUp";
    // use exec() because no results are returned
    $conn->exec($sql);
    // Skriver ut echo, bara för att kontrollera om allt fungierar
    //echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
        
    echo $sql . "<br>" . $e->getMessage();
    }

 $conn = null;
?>


<!-- Skapa tabeller: -->
<?
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "eventUp";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//sql to create table events
$sql = "CREATE TABLE IF NOT EXISTS events (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
eventName VARCHAR(30) NOT NULL,
content VARCHAR(255) NOT NULL,
dates DATETIME(6) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
category VARCHAR(55) NOT NULL,
images VARCHAR(255) NOT NULL,
userID INT (11) NOT NULL
)";

$conn->exec($sql);

// Skriver ut echo, bara för att kontrollera om allt fungierar
// echo "Table events created successfully";
}

catch(PDOException $e)
{
echo $e->getMessage();
}
?>


<?
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "eventUp";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//sql to create table participant
$sql = "CREATE TABLE IF NOT EXISTS participant (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    participantName VARCHAR(255) NOT NULL,
    participantEmail VARCHAR(255) NOT NULL,
    eventID INT (11) NOT NULL
    )";


$conn->exec($sql);

//echo "Table participant created successfully";
}

catch(PDOException $e)
{
echo $e->getMessage();
}
?>


<?
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "eventUp";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//sql to create table user
$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(255) NOT NULL,
    userEmail VARCHAR(255) NOT NULL,
    userPassword VARCHAR(255) NOT NULL
    )";

$conn->exec($sql);

//echo "Table user created successfully";
}

catch(PDOException $e)
{
echo $e->getMessage();
}

// $conn = null;
?>