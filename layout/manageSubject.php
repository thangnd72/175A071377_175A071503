<?php
session_start();
?>
<div class="mark-mangenment col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Manager Subjects</h3>
        </div>
        <div class="card-body">
            <div class="input-group mb-3 w-50 mt-5">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Chọn môn giảng dạy</label>
                </div>
                <select class="custom-select" id="subjectList">
                <?php if (isset($_SESSION['userID'])) {
                    $userID = $_SESSION['userID'];
                    $sql = "SELECT * FROM Subjects WHERE userID = '$userID'";
                    $result = mysqli_query($conn, $sql);
                    while ($row=mysqli_fetch_array($result)) {
                ?>
                    <option value="<?= $row['subjectID']; ?>"><?= $row['subjectName']; ?></option>
                <?php }
                }
                ?>
                </select>
                <button type="button" id="editSubjectBtn" class="btn btn-primary" data-toggle="modal" data-target="#editSubject">Thay đổi</button>
            </div>
            <div class="manage-mark mt-5 table-responsive">
            </div>
        </div>
    </div>
</div>
<?php include('modaleditSubject.php'); ?>
