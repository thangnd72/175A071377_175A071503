<?php
    session_start();
    if($_SESSION['level'] == 1) {
        require('../../mysqli_connect.php');
        if(!$conn) {
            die("Connect failed");
        } else {
            $userID = trim($_POST["userID"]);
            if($_SESSION['userID'] != $userID) {
                $sql= "DELETE FROM Users WHERE userID like '$userID'";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    echo json_encode(["status"=>true, "sql" => $sql, "user"=>$userID]);
                } else {
                    echo json_encode(["status"=>false, "message" => "SQL FAILED"]);
                }
            } else {
                echo json_encode(["status"=>false, "message" => "Không được xoá Admin"]);
            }
        }
    } else {
        echo json_encode(["status"=>false, "message" => "Không có quyền với user này!"]);
    }
?>
