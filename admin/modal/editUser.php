<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control"  id="userNameEdit" />
                                <div class="invalid-feedback" style="font-size: 12px">Name User is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control"  id="phoneEdit" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control"  id="contactEdit" />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Job</label>
                                <input type="text" class="form-control" id="jobEdit" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="saveUser" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
