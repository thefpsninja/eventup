<<<<<<< HEAD
=======
<div class="contact-clean">
    <!-- formen med back-end-validation: -->
    <form method="post" action="insertParticipantForm">
    <!-- action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" -->

        <h2 class="text-center">Jag vill vara med!</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Namn" require/>
            <? 
            // name validation
            /* $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Endast bokstäver och vitt utrymme tillåtet"; 
            } */
            ?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" require/>
            <? 
            // email validation
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

>>>>>>> laurasBranch
<?
require ('database.php');
<<<<<<< HEAD
?>
<div class="contact-clean">
    <!-- formen med back-end-validation: -->
    <form method="post" action="insert.php">
    <!-- action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" -->

        <h2 class="text-center">Jag vill vara med!</h2>

        <div class="form-group">
            <input type="text" class="form-control" name="participantName" placeholder="Namn" require/>
            <? 
            // name validation
            /* $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Endast bokstäver och vitt utrymme tillåtet"; 
            } */
            ?>
        </div>

        

        <div class="form-group">
            <input type="email" class="form-control" name="participantEmail" placeholder="Email" require/>
            <? 
            // email validation
            /* $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Ange en korrekt e-postadress."; 
            } */
            ?>
        </div>
    <div class="form-group">
        <button  class="btn btn-primary" type="submit">Skicka</button>
    </div>
    </form>
</div>
=======

try {

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$sql = "INSERT INTO participant (participantName, participantEmail, eventID)
//VALUES (:participantName, :participantEmail, :eventID)";

$stmt = $conn->prepare("INSERT INTO participant (participantName, participantEmail, eventID)
VALUES (:participantName, :participantEmail, :eventID)");


$stmt->bindParam (':participantName', $_POST['participantName']);
$stmt->bindParam (':participantEmail', $_POST['participantEmail']);
$stmt->bindParam (':eventID', $event['id']);
//$stmt->bindParam(':eventID', $eventID);

// use exec() because no results are returned
$conn->exec($sql);

if($conn->connect_error){
    echo " Oops! You have an ERROR ";
} else {
    echo " Yes! A new participant was added! ";

}

/* catch(PDOException $e)
{
echo $sql . "
" . $e->getMessage();
} */

$stmt->execute();
// slut på test

?>
>>>>>>> laurasBranch
