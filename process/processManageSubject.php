<?php
    session_start();
    if($_SESSION['level'] == 2 ) {
        $userID = $_SESSION["userID"];
        require('../mysqli_connect.php');
        if(!$conn) {
            die("Connect failed");
        } else {
            $subjectName = trim($_POST["subjectName"]);
            $credits = trim($_POST["credits"]);
            $processMark = trim($_POST["processMark"]);
            $testScore = trim($_POST["testScore"]);
            $sql = "UPDATE Subjects SET credits = '$credits', processMark = '$processMark', testScore = '$testScore' WHERE userID like '$userID'";
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo json_encode(["status"=>true, "sql" => $sql]);
            } else {
                echo json_encode(["status"=>false, "message"=>"SQL FAILED", "sql" => $sql]);
            }
        }
    } else {
        echo json_encode(["status"=>false, "message"=>"Không có quyền với user này"]);
    }
?>
