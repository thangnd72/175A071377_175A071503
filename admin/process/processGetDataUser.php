<?php
    require('../../mysqli_connect.php');
    if(!$conn) {
        die("Connect failed!");
    } else {
        $userID = trim($_POST['userID']);
        if($userID!='') {
            $sql = "SELECT * FROM Users WHERE userID like '$userID'";
            $user = mysqli_query($conn, $sql);
            if($row = mysqli_fetch_array($user)) {
                echo json_encode(["status"=>true, "userID"=>$row['userID'], "userName" => $row['userName'] ,"phone"=>$row['phone'], "contact"=>$row['contact'], "job"=>$row['job']]);
            } else {
                echo json_encode(["status"=>false, "message"=>"SQL FAILED!"]);
            }
        } else {
            echo json_encode(["status"=>false, "message"=>"ID User invalid!"]);
        }
    }
?>
