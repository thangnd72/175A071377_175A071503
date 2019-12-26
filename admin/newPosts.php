<div class="col-12 mt-5">
    <div class="card table-big-boy">
        <div class="card-header ">
            <h4 class="card-title">New Post</h4>
            <p class="card-category">Create a new post</p>
            <br />
        </div>
        <div class="alert alert-success notify-success" style="display: none;" role="alert">
        </div>
        <div class="card-body" id="newUserForm">
            <div class="form-group col-12">
                <label for="permission">Category</label>
                <select class="custom-select p-13" name="category" id="category">
                    <option value="">Select one</option>
                    <option value="news">Tin Tức</option>
                    <option value="notify">Thông Báo</option>
                    <option value="events">Sự Kiện</option>
                    <option value="futureStudent">Sinh Viên Tương Lai</option>
                    <option value="presentStudent">Sinh Viên Hiện Tại</option>
                    <option value="oldStudent">Cựu Sinh Viên</option>
                </select>
                <div class="invalid-feedback" style="font-size: 12px">Category is required.</div>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" />
                <div class="invalid-feedback" id="titleErr" style="font-size: 12px">Title is required.</div>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" />
                <div class="invalid-feedback" style="font-size: 12px">Description is required.</div>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Content</label>
                <textarea rows="10" cols="150" name="contentPost" id="contentPost" class="form-control" placeholder="Here can be your description" value=""></textarea>
                <div class="invalid-feedback" style="font-size: 12px">Author is required.</div>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Author</label>
                <input type="text" class="form-control" name="author" id="author" />
                <div class="invalid-feedback" style="font-size: 12px">Author is required.</div>
            </div>
            <div class="card-bottom">
                <input type="button" class="btn btn-info d-block ml-auto" id="newPostBtn" name="newPostBtn" value="ADD NEW" />
            </div>
        </div>
    </div>
</div>
