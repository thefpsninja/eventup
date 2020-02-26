<!-- The Modal -->
<div class="modal" id="registerModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Register Modal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="register-photo">
        <div class="form-container">

          <div class="image-holder"></div>

            <form method="post">
              <h2 class="text-center"><strong>Skapa</strong> ett event-konto</h2>
              
              <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" />
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Lösenord" />
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="password-repeat" placeholder="Upprepa lösenordet" />
              </div>
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" />Jag godkänner licensvillkoren.</label>
                </div>
              </div>

              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Bli medlem</button>
              </div>
              <a class="already" href="#">Du har redan ett konto? Logga in här.</a>

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
