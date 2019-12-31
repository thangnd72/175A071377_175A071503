<div class="modal fade" tabindex="-1" role="dialog" id="register-form">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success font-weight-bold">REGISTER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" name="firstName" id="fName" placeholder="" maxLength="30">
                                <div class="invalid-feedback" style="font-size: 12px">First name is required.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" name="lastName" id="lName" placeholder="" maxLength="30">
                                <div class="invalid-feedback" style="font-size: 12px">Last name is required.</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="" maxLength="50">
                        <div class="invalid-feedback" id="email-err" style="font-size: 12px">Email is required.</div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Password</label>
                        <input type="password" class="form-control" name="password" id="pw-register" placeholder="" minLength="6" maxLength="100">
                        <div class="invalid-feedback" id="passwordErr"style="font-size: 12px">Password is required</div>
                    </div>
                    <div class="form-group">
                        <label for="phone"> Confirm Password</label>
                        <input type="password" class="form-control" name="pw-confirm" id="pw-confirm" placeholder="">
                        <div class="invalid-feedback" style="font-size: 12px">Confirm password doesn't match. Try Again</div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Login</a>
                        <input type="button" id="register-submit" class="btn btn-info mx-auto" value="REGISTER" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
