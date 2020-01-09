<?php
    session_start();

    include_once('../mysqli_connect.php');
    if(!$conn) {
        die("Connect failed");
    } else {
        $idUser = $_SESSION['idUser'];
        $oldPass = trim($_POST['oldPass']);
        $newPass = trim($_POST['newPass']);
        $sqlCheck = "SELECT password FROM Account WHERE accID = $idUser";
        $acc = mysqli_query($conn, $sqlCheck);
        $row =mysqli_fetch_array($acc);
        if(password_verify($oldPass, $row["password"])) {
            $hash_password = password_hash($newPass, PASSWORD_DEFAULT);
            $sql = "UPDATE Account SET password = '$hash_password' WHERE accID = $idUser";
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo json_encode(["status"=>"success", "message"=>"Updated password"]);
            } else {
                echo json_encode(["status"=>"failed", "message"=>"SQL FAILED"."$sql"]);
            }
        } else {
            echo json_encode(["status"=>"error", "message"=>"Old password is not correct."]);

        }
    }
?>
