<div class="col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">New Account</h4>
            <p class="card-category">Create a new user</p>
        </div>
        <div class="card-body" id="newUserForm">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <label class="col-form-label">First Name:</label>
                        <input type="text" class="form-control" name="firstName" id="fName" maxlength="30" />
                        <div class="invalid-feedback" style="font-size: 12px">First name is required.</div>
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="col-form-label">Last Name:</label>
                        <input type="text" class="form-control" name="lastName" id="lName" maxlength="30" />
                        <div class="invalid-feedback" style="font-size: 12px">Last name is required.</div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label">Email Account</label>
                <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" name="email" id="email" />
                <div class="invalid-feedback" id="emailErr" style="font-size: 12px">Email is required.</div>
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
                <input type="password" class="d-block mw-auto w-100 form-fields form-control w-25" name="password" id="pwd" />
                <div class="invalid-feedback" id="passwordErr" style="font-size: 12px">Password is required.</div>
            </div>
            <div class="form-group">
                <label class="col-form-label">Confirm Password</label>
                <input type="password" class="d-block mw-auto w-100 form-fields form-control w-25"  name="cfpassword" id="cfpwd" />
                <div class="invalid-feedback" style="font-size: 12px">Confirm password does't match. Try again.</div>
            </div>
            <div class="form-group">
                <label>Level</label>
                <select class="custom-select" name="level" id="level">
                    <option value="">Select one</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <div class="invalid-feedback" style="font-size: 12px">Level is required.</div>
            </div>
            <div class="form-group">
                <label class="col-form-label font-weight-bold mt-5" style="font-size:1.6rem;">New Users:</label>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label class="col-form-label">User ID:</label>
                            <input type="text" class="form-control" name="idUser" id="idUser" />
                            <div class="invalid-feedback" id="idUserErr" style="font-size: 12px">User ID is required.</div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="col-form-label">Phone:</label>
                            <input type="text" class="form-control" name="phone" id="phone" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label class="col-form-label">Email Contact:</label>
                            <input type="text" class="form-control" name="emailContact" id="eContact" />
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="col-form-label">Job:</label>
                            <select class="custom-select" name="jobUser" id="jobUser">
                                <option value="">Select one</option>
                                <option value="admin">Admin</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-bottom">
                    <input type="button" class="btn btn-info d-block ml-auto" id="newUserBtn" name="newUserButton" value="ADD NEW" />
                </div>
            </div>
        </div>
    </div>
</div>
