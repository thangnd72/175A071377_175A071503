<div class="modal fade" id="editSubject" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT SUBJECT INFOMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Subject Name</label>
                                <input type="text" class="form-control" id="sNameEdit" disabled />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Credits</label>
                                <input type="text" class="form-control" id="creEdit" />
                                <div class="invalid-feedback" style="font-size: 12px">Credits is required.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Process Marks</label>
                                <input type="text" class="form-control" id="pMarkEdit" />
                                <div class="invalid-feedback" style="font-size: 12px">Process Marks is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Test Marks</label>
                                <input type="text" class="form-control" id="testMarkEdit" />
                                <div class="invalid-feedback" style="font-size: 12px">Test Score is required.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="saveSubject" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
