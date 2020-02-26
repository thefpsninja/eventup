<?
require ('database.php');
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