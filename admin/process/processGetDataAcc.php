<?php
    require('../../mysqli_connect.php');
    if(!$conn) {
        die("Connect failed!");
    } else {
        $accID = trim($_POST['accID']);
        if($accID != '') {
            $sql = "SELECT * FROM Account WHERE accID like '$accID'";
            $acc = mysqli_query($conn, $sql);
            if($row = mysqli_fetch_array($acc)) {
                echo json_encode(["status"=>true, "accID" => $row['accID'], "firstName" => $row['firstName'] ,"lastName" => $row['lastName'], "email"=>$row['email'], "level"=>$row['level']]);
            } else {
                echo json_encode(["status"=>false, "message"=>"SQL FAILED!"]);
            }
        } else {
            echo json_encode(["status"=>false, "message"=>"ID Account invalid!"]);
        }
    }
?>
