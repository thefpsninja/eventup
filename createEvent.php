<!-- The Modal -->
<div class="modal" id="eventModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Event Modal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="addNewEvent.php" method="POST">
              <input for="e_name" type="text" placeholder="Event Namn">
              <textarea for="e_content" rows="4" cols="50" name="information" form="usrform" style="margin-top: 5px;" placeholder="Information"></textarea>
              <input for="e_dates" type="text" placeholder="Datum">
              <button style="width: 200px; margin: auto;" type="submit" class="btn-success btn">Skapa event</button>
              </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>