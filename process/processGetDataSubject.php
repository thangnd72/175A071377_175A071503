<?php
    session_start();
    if ($_SESSION['level'] == 2) {
        require('../mysqli_connect.php');
        if (!$conn) {
            die("Connect failed!");
        } else {
            $subjectID = trim($_POST['subjectID']);
            if ($subjectID != '') {
                $sql = "SELECT * FROM Subjects WHERE subjectID like '$subjectID'";
                $sub = mysqli_query($conn, $sql);
                if ($row = mysqli_fetch_array($sub)) {
                    echo json_encode(["status"=>true, "subjectName" => $row['subjectName'] ,"credits" => $row['credits'], "processMark"=>$row['processMark'], "testScore"=>$row['testScore']]);
                } else {
                    echo json_encode(["status"=>false, "message"=>"SQL FAILED!"]);
                }
            } else {
                echo json_encode(["status"=>false, "message"=>"ID Subject invalid!"]);
            }
        }
    }
    else {
        echo json_encode(["status"=>false, "message"=>"không có quyền với user này!"]);
    }
?>
