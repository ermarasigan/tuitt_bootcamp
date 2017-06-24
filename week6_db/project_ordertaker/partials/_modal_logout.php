<!-- Modal partial for Log In button -->

<div class="container">
  <div class="modal fade " id="logout_modal" role="dialog"
    data-backdrop="static" data-keyboard="false">  
      <!-- don't close modal when clicked outside window -->
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <!-- Modal Header-->
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log In</h4>
        </div> -->

        <!-- Modal Body-->
        <div class="modal-body">
          <?php
            echo 'Hi ' . $_SESSION ['username'] . ',<br>';
          ?>
          You've been successfully logged out
        </div>

        <!-- Modal Footer-->
        <div class="modal-footer">
          <form action="" method="POST">
            <div class="form-group">
              <button type="submit" name="home" class="btn btn-default btn-block">
                Home
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>  
</div>