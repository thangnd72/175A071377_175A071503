<div class="modal fade" id="changePass" tabIndex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">CHANGE PASSWORD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="col-form-label">Old Password:</label>
                        <input type="password" class="form-control" name="oldPass" id="oldPass"/>
                        <div class="invalid-feedback" id="oPassErr" style="font-size: 12px">Old password is required.</div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">New Password:</label>
                        <input type="password" class="form-control" name="newPassword" id="newPass" />
                        <div class="invalid-feedback" id="nPassErr" style="font-size: 12px">New password is required.</div>
                    </div>
                    <label class="col-form-label">Confirm New Password:</label>
                        <input type="password" class="form-control" name="reNewPassword" id="cfnewPass" />
                        <div class="invalid-feedback" style="font-size: 12px">Confirm password does't match. Try again.</div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" id="change-submit" class="btn btn-info mx-auto" value="SAVE" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
