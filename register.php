<!-- The Modal -->
<div class="modal" id="registerModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registrera dig</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div class="register-photo">
          <div class="form-container">
            <div class="image-holder"></div>
              <form method="post">

                <div class="form-group">
                  <input type="email" data-toggle="tooltip" class="form-control" name="email" placeholder="Email" autofocus required title="Ange ditt email-adress" />
                </div>

                <div class="form-group">
                  <input type="password" data-toggle="tooltip" class="form-control" name="password" placeholder="Lösenord" title="Ange ett lösenord. Min. längd är 6 tecken, och max. längt är 36 tecken. Tillåtna tecken är: ^[a-zA-Z0-9_.-]*$%#" pattern="^[a-zA-Z0-9_.-]*$%#" required minlength="6" maxlength="36" autofocus />
                </div>

                <div class="form-group">
                  <input type="password" data-toggle="tooltip" class="form-control" name="password-repeat" placeholder="Upprepa lösenordet" autofocus required pattern="^[a-zA-Z0-9_.-]*$%#" title="Upprepa ditt nya lösenordet" minlength="6" maxlength="36"
                    />
                </div>

                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" />Jag godkänner licensvillkoren.</label>
                  </div>
                </div>

                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Bli medlem</button>
                </div>
                <a class="already" href="#">Har du redan ett konto? Logga in här.</a>
                
              </form>
            </div>
          </div>
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
