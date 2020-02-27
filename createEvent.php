
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

            <form action="addNewEvent.php" method="POST" data-bss-recipient="e1dfaaece55c83f7fd015f6f4fb74d94">

              <div class="form-group">
                <input type="text" data-toggle="tooltip" class="form-control" name="eventName" placeholder="Event namn" autofocus required title="Ange event namn" />
              </div>

              <div class="form-group">
                <textarea data-toggle="tooltip" class="form-control" name="content" placeholder="Beskriv eventet" rows="4" title="Skriv något om eventet" spellcheck="true" autofocus required></textarea>
              </div>

              <div class="form-group">
                <label>Välj ett kategori för eventet</label>
                <select class="form-control" autofocus required title="Ange event-kategoriet" name="category">
                  <optgroup label="Kategorier" >
                    <option value="Möte">Möte</option>
                    <option value="Fika">Fika</option>
                    <option value="Musik">Musik</option>
                    <option value="Party">Party</option>
                    <option value="Gaming">Gaming</option>
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <label>Ange datum och tid för eventet</label>
                
                <div class="col float-left" style="width: 50%;">
                  <input data-toggle="tooltip" class="form-control" type="date" name="dates" required title="Ange datum för eventet" placeholder="ÅÅÅÅ-MM-DD" />
                </div>

                <div class="col float-right" style="width: 50%;">
                    <!-- <input data-toggle="tooltip" class="form-control" type="time" name="time" required title="Ange tiden för eventet" placeholder="hh-mm" /> -->
                </div>
              </div>

              <div class="form-group">

                <label>Ladda upp en event-bild eller skriv URL-adressen till en bild på internet.</label>
                
                <!-- <input type="file" data-toggle="tooltip" name="images-files" accept="image/*" title="Ladda upp bilden till eventet" /> -->
                
                <input type="url" data-toggle="tooltip" class="form-control" name="images" placeholder="Bildens URL-adress" autofocus title="Ange URL-adressen till bilden" />
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Stäng</button>
      </div>

    </div>
  </div>
</div>