<?php
    session_start();
    if($_SESSION['level'] == 1) {
        require('../../mysqli_connect.php');
        if(!$conn) {
            die("Connect failed");
        } else {
            $userID = trim($_POST["userID"]);
            $userName = trim($_POST["userName"]);
            $phone = trim($_POST["phone"]);
            $contact = trim($_POST["contact"]);
            $job = trim($_POST["job"]);
            $sql = "UPDATE Users SET userName = '$userName', phone = '$phone', contact = '$contact', job = '$job' WHERE userID like '$userID'";
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo json_encode(["status"=>true]);
            } else {
                echo json_encode(["status"=>false, "message"=>"SQL FAILED"]);
            }
        }
    } else {
        echo json_encode(["status"=>false, "message"=>"Không có quyền với user này"]);
    }
?>
