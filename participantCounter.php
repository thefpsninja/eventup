<?
require('database.php');
$sql = "SELECT * FROM participant";
$stmt = $conn->prepare($sql);
$stmt->execute();
$participants = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?
$amount = 0;
foreach($participants as $participant) : 
    if($event['id'] == $participant['eventID']) : ?>
        <? $amount = $amount + 1; ?>
        <? endif; ?>
<? endforeach; ?>
<? echo $amount; ?>
