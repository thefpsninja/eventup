<div class="w-75 view overlay">
      <li type="button" class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" href="#collapseOne">
     MALMÖ: Dropin Party! BBQ&nbsp;<span class="badge badge-pill badge-primary"></span><span class="badge badge-pill badge-primary">25 Deltagare</span> </li>
    <div id="collapseOne" class="collapse" data-parent="#accordion">
      <div class="list-group-item">
        <img src="https://i.kym-cdn.com/entries/icons/original/000/000/007/bd6.jpg" class="img-thumbnail w-50 mx-auto d-block" alt="RickRoll">
        <?
require('database.php');
$sql = "SELECT * FROM eventUp";
$stmt = $conn->prepare($sql);
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<pre>
    <?php
    print_r($events);
    ?>
</pre>
<?
foreach($events as $event) : 
    if($event['eventName']) : ?>
        <h1>
            <? echo $event['eventName']; ?>
        </h1>
        <h2>
            <? echo $event['content']; ?>
        </h2>
        <p>
            <? echo $event['dates']; ?>
        </p>
        <h4>
            <? echo $event['id']; ?>
        </h4>
        <!-- <form action="deleteEvent.php" method="post">
            <input type="hidden" name="send" value="<? //echo $event['id']; ?>">
            <button>Radera eventet</button>
        </form> -->
    <? endif; ?>
<? endforeach; ?>

      

<!--         <form action="getsushi.php">

            <button id="btn-dish-id" name="btn-delete" value="delete" type="submit" class="btn btn-primary">Delete</button> -->

            <?
            /* if($_POST['btn-delete']=='id'){
                mysql_query("delete from sushi_menu where id='{$_POST["dish-id"]}'");
            }
                $sql = "DELETE FROM sushi_menu WHERE id=('dish-id')";  */
            ?>

    <!--  </form> -->
<?

//foreach($curlybrackets as $curlybracket) {
    // do something }

// foreach($curlybrackets as $curlybracket) :
//     if ($var == "?") : 
//         // do something

//         else :
//             // do something else
//     endif;   
// endforeach;
?>
      </div>
    </div>
  </div>