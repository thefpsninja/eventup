<?
require ('database.php');
$participantName=$_POST['participantName'];
$participantEmail=$_POST['participantEmail'];

$sql = "INSERT INTO participant (participantName, participantEmail) 
VALUES ('$participantName', '$participantEmail')";

//$conn->exec($sql);

if($conn->connect_error){
echo " Oops! You have an ERROR ";
} else {
echo " Yes! A new participant was added! ";

}
?>