<div class="user-management col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Manager Users</h3>
            <div class="status-bar mt-3 d-flex">
                <form>
                    <input type="text" class="textbox" placeholder="Search" />
                </form>
                <button title="Tìm kiếm" type="submit" class="button"><i class="fas fa-search"></i></button>
                <a class="text-decoration-none ml-auto" href="#"><input type="button" class="btn btn-outline-secondary" value="Thêm người dùng" /></a>
            </div>
        </div>
        <div class="card-body">
            <div class="list-users mt-5 table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Vai trò</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Xử lí</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Đỗ Ngọc Minh</td>
                            <td>minhreal13@gmail.com</td>
                            <td>Admin</td>
                            <td>2019/12/13</td>
                            <td class="d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary mr-2"><i class="fas fa-info"></i></button>
                                <a href="#"><button type="button" class="btn btn-outline-info mr-2"><i class="fas fa-edit"></i></button></a>
                                <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
