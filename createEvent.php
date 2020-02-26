
<!-- The Modal -->
<div class="modal" id="eventModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Skapa ett event</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <div class="register-photo">
        <div class="form-container">

          <div class="image-holder"></div>

            <form action="addNewEvent.php" method="POST">

              <div class="form-group">
                <input class="form-control" name="eventName" placeholder="Event Namn" type="text" />
              </div>

              <div class="form-group">
              <textarea class="form-control" name="content" style="margin-top: 5px;" rows="4" placeholder="Information"></textarea>
              </div>

              <div class="form-group">
                <input class="form-control" type="date" name="dates" placeholder="ÅÅÅÅ-MM-DD" />
              </div>

              <div class="form-group">
                <label>Välj ett kategori för eventet</label>
                <select class="form-control" name="category">
                  <optgroup label="Kategori">
                    <option value="Möte">Möte</option>
                    <option value="Fika">Fika</option>
                    <option value="Party">Party</option>
                    <option value="Anime">Anime</option>
                    <option value="Gaming">Gaming</option>
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <input class="form-control" type="url" name="images" placeholder="Image URL" />
              </div>

              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" class="btn-success btn">Skapa event</button>
              </div>

            </form>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>