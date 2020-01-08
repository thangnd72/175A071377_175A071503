<?php
    session_start();
    if($_SESSION['level'] == 1) {
        require('../../mysqli_connect.php');
        if(!$conn) {
            die("Connect failed");
        } else {
            $accID = trim($_POST["accID"]);
            if($_SESSION['accID'] != $accID) {
                $sql= "DELETE FROM Account WHERE accID like '$accID'";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    echo json_encode(["status"=>true, "sql" => $sql, "account"=>$accID]);
                } else {
                    echo json_encode(["status"=>false, "message" => "SQL FAILED"]);
                }
            } else {
                echo json_encode(["status"=>false, "message" => "Không thể xoá tài khoản này!"]);
            }
        }
    } else {
        echo json_encode(["status"=>false, "message" => "Không có quyền với user này!"]);
    }
?>
