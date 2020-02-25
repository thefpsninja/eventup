

<!-- <section class="showcase"></section> -->


<div class="contact-clean">
<!-- form med validation: -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <h2 class="text-center">Jag vill vara med!</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Namn" require/>
        </div>
<? //name validation
        /* $name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Endast bokstäver och vitt utrymme tillåtet"; 
} */
?>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" require/>

<? //email validation
/* $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Ange en korrekt e-postadress."; 
} */
?>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Skicka</button>
        </div>
    </form>
</div>



<!-- START insert data into participant-table -->



<?
// borjan på test av en annan kod...
require ('database.php');
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO participant (participantName, participantEmail, eventID)
VALUES (:participantName, :participantEmail, :eventID)";

// use exec() because no results are returned
$conn->exec($sql);
echo "New record created successfully";
}
catch(PDOException $e)
{
echo $sql . "
" . $e->getMessage();
}
// slut på test

?>

<?php

/* 

if($conn->connect_error){
    echo " Oops! You have an ERROR ";
} else {
    echo " Yes! A new participant was added! ";


$sql = "INSERT INTO participant (id, participantName, participantEmail, eventID)
VALUES (:id, :participantName, :participantEmail, :eventID)";

$stmt = $conn->prepare($sql);

$stmt->bindParam (':id', $_POST['id']);
$stmt->bindParam (':participantName', $_POST['participantName']);
$stmt->bindParam (':email', $_POST['email']);
$stmt->bindParam (':eventID', $event['id']);

$stmt->execute();
 */
?>