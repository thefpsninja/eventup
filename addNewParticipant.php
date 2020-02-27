<?
require('database.php');

//$conn->exec($sql);

if($conn->connect_error){
echo " Oops! You have an ERROR ";
} else {
header ("Location: index.php");

// $eventID = $event['id'];

$sql = "INSERT INTO participant (participantName, participantEmail, eventID) 
VALUES (:pName, :pEmail, :pID)";

$stmt = $conn->prepare($sql);


$stmt->bindParam(':pName', $_POST['participantName']);
$stmt->bindParam(':pEmail', $_POST['participantEmail']);
$stmt->bindParam(':pID', $_POST['eventID']);

$stmt->execute();
}


?>