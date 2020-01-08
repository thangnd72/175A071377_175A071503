<div class="user-management col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Manager Accounts</h3>
        </div>
        <div class="card-body">
            <div class="list-account mt-5 table-responsive">
                <table class="table table-hover text-center" id="showAcc">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM Account ORDER BY accID ASC LIMIT 15";
                        $acc = mysqli_query($conn, $sql);
                        while ($rowAcc = mysqli_fetch_array($acc)) {
                        ?>
                            <tr>
                                <td><?= $rowAcc['accID']; ?></td>
                                <td><?= $rowAcc['firstName'] . ' ' . $rowAcc['lastName']; ?></td>
                                <td><?= $rowAcc['email']; ?></td>
                                <td>
                                    <?php
                                    if ($rowAcc['level'] == 1) {
                                        echo 'Admin';
                                    } else if ($rowAcc['level'] == 2) {
                                        echo 'Teacher';
                                    } else echo 'Student';
                                    ?>
                                </td>
                                <td><?= $rowAcc['created']; ?></td>
                                <td class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-outline-secondary mr-2"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-outline-info mr-2" data-toggle="modal" data-target="#editAcc" data-acc="<?= $rowAcc['accID']; ?>" id="editAccBtn"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirm-delete" data-acc="<?= $rowAcc['accID']; ?>" id="deleteAccBtn"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('layout/confirmDelete.php'); ?>
<?php include('admin/modal/editAcc.php'); ?>
