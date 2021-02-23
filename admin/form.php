<?php
session_start();
error_reporting(0);
?>





<!-- add/edit form modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update <i class="fa fa-user-circle-o"
            aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ID:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i>
              </div>
              <input type="number" class="form-control" id="eid" name="eid" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-home" aria-hidden="true"></i>
              </div>
              <input type="text" class="form-control" id="name" name="name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">City:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o"
                    aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" id="city" name="city" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mobile:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"
                    aria-hidden="true"></i></span>
              </div>
              <input type="phone" class="form-control" id="phone" name="phone" required="required" maxLength="10"
                minLength="10">
            </div>
          </div>

           <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
              </div>
              <input type="phone" class="form-control" id="email" name="email" required="required" maxLength="10"
                minLength="10">
            </div>
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Comment:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-commenting-o" aria-hidden="true"></i>
              </div>
              <input type="text" class="form-control" id="Comment" name="Comment" required="required">
            </div>
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i>
              </div>
              <input type="Date" class="form-control" id="Date" name="Date" required="required">
            </div>
          </div>


       <div class="form-group">
            <label for="recipient-name" class="col-form-label">WebSite:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
          <i class="fa fa-chrome" aria-hidden="true"></i>
              </div>
              <input type="text" class="form-control" id="WebSite" name="WebSite" required="required">
            </div>
          </div>




          


          <div class="form-group">
            <label for="message-text" class="col-form-label">Status:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-hourglass-start" aria-hidden="true"></i></span>
              </div>
                   <label for="status">Choose Status</label>
    <select name="status" id="status">
                               <option value="NEW">NEW</option>
                                 <option value="CALLED">CALLED</option>
                                      <option value="NO ANSWER">NO ANSWER</option>
                                         <option value="WRONG NUMBER">WRONG NUMBER</option>
                                      <option value="CALL BACK">CALL BACK</option>
                                      <option value="APOINTMENT">APOINTMENT</option>
                                      <option value="NOT INTERESTED">NOT INTERESTED</option>
                                      <option value="INTERESTED">INTERESTED</option>
  </select>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" id="addButton">Submit</button>
          <input type="hidden" name="action" value="adduser">
          <input type="hidden" name="userid" id="userid" value="">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- add/edit form modal end -->
