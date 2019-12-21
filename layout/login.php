<div class="modal fade" tabindex="-1" role="dialog" id="login-form">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success font-weight-bold">LOGIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="alert-success">
                </div>
                <form action="">
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" name="email" id="email-login" placeholder="" maxLength="50">
                        <div class="invalid-feedback" id="email-login-err" style="font-size: 12px">Please provide a valid email</div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Password</label>
                        <input type="password" class="form-control" name="password" id="pw-login" placeholder="" minLength="6" maxLength="12">
                        <div class="invalid-feedback" id="pw-err" style="font-size: 12px">Password is required</div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-toggle="modal" data-target="#register-form" data-dismiss="modal">Register</a>
                        <input type="button" id="login-submit" class="btn btn-info mx-auto" value="LOGIN" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
