<div class="">
<?
require('database.php');
$sql = "SELECT * FROM events";
$stmt = $conn->prepare($sql);
$stmt->execute();
$eventPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<pre>
    <?php
    // print_r($eventPosts);
    ?>
</pre>
<?
foreach($eventPosts as $event) : 
    if($event['eventName']) : ?>
    <div class="w-75 view overlay">
      <li type="button" class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" href="#collapse<? echo $event['id']; ?>">
      <? echo $event['eventName']; ?><span class="badge badge-pill badge-primary"></span><span class="badge badge-pill badge-primary" data-toggle="dropdown">
      <? include 'ParticipantCounter.php'; ?> Deltagare <br> Visa Info
      <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li>
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
                  Namn: <? echo $participant['participantName']; ?> <br>
                  Email: <? echo $participant['participantEmail']; ?><br><br>
                  <? endif; ?>
          <? endforeach; ?>
          </li>
        </ul>
      </span> </li>
    <div id="collapse<? echo $event['id']; ?>" class="collapse" data-parent="#accordion">
      <div class="list-group-item">
        <img src="<? 
        if (empty($event['images'])) 
        {echo 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRV0IIzEdZ1yi-_SOEp6qLDx35PQhehqMC_rN8ftlHpMGf3ioup';} 
        else {echo $event['images'];} ?>" class="img-thumbnail w-50 mx-auto d-block" alt="">
        <p class="lead"> <? echo $event['content']; ?> </p>
        <div class="card-footer"><? include 'participantForm.php'; ?></div>
      </div>
    </div>
  </div>
        <!-- <form action="deleteEvent.php" method="post">
            <input type="hidden" name="send" value="<? //echo $event['id']; ?>">
            <button>Radera eventet</button>
        </form> -->
    <? endif; ?>
<? endforeach; ?>
</div>
