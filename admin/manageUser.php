<div class="user-management col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Manager Users</h3>
            <div class="status-bar mt-3 d-flex">
                <form>
                    <input type="text" class="textbox" placeholder="Search" />
                </form>
                <button title="Tìm kiếm" type="submit" class="button"><i class="fas fa-search"></i></button>
                <a class="text-decoration-none ml-auto" href="dashboard.php?category=newAccount"><input type="button" class="btn btn-outline-secondary" value="Thêm người dùng" /></a>
            </div>
        </div>
        <div class="card-body">
            <div class="list-users mt-5 table-responsive">
                <table class="table table-hover text-center" id="showUser">
                    <thead>
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Job</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM Users ORDER BY userID ASC LIMIT 15";
                        $users = mysqli_query($conn, $sql);
                        while($rowUser = mysqli_fetch_array($users)) {
                    ?>
                        <tr>
                            <td><?= $rowUser['userID']; ?></td>
                            <td><?= $rowUser['userName']; ?></td>
                            <td><?= $rowUser['phone']; ?></td>
                            <td><?= $rowUser['contact']; ?></td>
                            <td><?= $rowUser['job']; ?></td>
                            <td class="d-flex justify-content-end">
                                <a href="#"><button type="button" class="btn btn-outline-secondary mr-2"><i class="fas fa-info"></i></button></a>
                                <a href="#"><button type="button" class="btn btn-outline-info mr-2" data-toggle="modal" data-target="#editUser" data-user="<?=$rowUser['userID'];?>" id="editUserBtn" ><i class="fas fa-edit"></i></button></a>
                                <a href="#"><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirm-delete" data-user="<?=$rowUser['userID'];?>" id ="deleteUserBtn"><i class="fas fa-trash-alt"></i></button></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('admin/modal/editUser.php'); ?>
<?php include('layout/confirmDelete.php'); ?>
