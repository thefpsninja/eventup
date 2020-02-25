<?
require ('database.php');
$sql = "INSERT INTO participant (participantName, participantEmail) VALUES ('$participantName', '$participantEmail')";
//'$eventID'
//$conn->exec($sql);

if($conn->connect_error){
echo " Oops! You have an ERROR ";
} else {
echo " Yes! A new participant was added! ";

}
?>