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
      <li type="button" class="list-group-item d-flex justify-content-between align-items-center mb-1" data-toggle="collapse" href="#collapse<? echo $event['id']; ?>">
      <h4><? echo $event['eventName']; ?></h4>
      <p><strong>Datum: </strong><? echo date('d-m-yy',strtotime($event['dates'])); ?></p>
      <span class="badge badge-secondary"></span><span class="badge badge-secondary" data-toggle="dropdown">
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
          <h3 style="text-align: center;">Gästlista</h3>
          <?
          $amount = 0;
          foreach($participants as $participant) : 
              if($event['id'] == $participant['eventID']) : ?> 
              <p style="padding: 5px; font-weight: 400;">
                  <strong> Namn: </strong><? echo $participant['participantName']; ?>  
                  <br>
                  <strong>Email: </strong> <? echo $participant['participantEmail']; ?> <hr style="width: 75%; border-color: black;"></p>
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
