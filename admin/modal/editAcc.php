<div class="modal fade" id="editAcc" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT ACCOUNT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" id="fNameEdit" />
                                <div class="invalid-feedback" style="font-size: 12px">First name is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" id="lNameEdit" />
                                <div class="invalid-feedback" style="font-size: 12px">Last name is required.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="emailEdit" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Level</label>
                                <select class="custom-select" name="level" id="levelEdit">
                                    <option value="1">Admin</option>
                                    <option value="2">Teacher</option>
                                    <option value="3">Student</option>
                                </select>
                                <div class="invalid-feedback" style="font-size: 12px">Level is required.</div>
                            </div>
                        </div>
                    <div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="saveAcc" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
