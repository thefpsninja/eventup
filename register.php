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
              <h2 class="text-center"><strong>Create</strong> an account.</h2>
              
              <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" />
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" />
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" />
              </div>
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" />I agree to the license terms.</label>
                </div>
              </div>

              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
              </div>
              <a class="already" href="#">You already have an account? Login here.</a>

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
