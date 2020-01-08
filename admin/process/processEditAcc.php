<?php
    session_start();
    if($_SESSION['level'] == 1) {
        require('../../mysqli_connect.php');
        if(!$conn) {
            die("Connect failed");
        } else {
            $accID = trim($_POST["accID"]);
            $firstName = trim($_POST["firstName"]);
            $lastName = trim($_POST["lastName"]);
            $email = trim($_POST["email"]);
            $level = (int) trim($_POST["level"]);
            $sql = "UPDATE Account SET firstName = '$firstName', lastName = '$lastName', email = '$email', level = $level WHERE accID like '$accID'";
            $result = mysqli_query($conn, $sql);
            // echo $result;
            if($result) {
                echo json_encode(["status"=>true]);
            } else {
                echo json_encode(["status"=>false, "message"=>"SQL FAILED", "sql" => $sql]);
            }
        }
    } else {
        echo json_encode(["status"=>false, "message"=>"Không có quyền với user này"]);
    }
?>
