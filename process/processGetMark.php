<?php

    require('../mysqli_connect.php');

        $userID = trim($_POST["userID"]);
        $CMT = trim($_POST["CMT"]);
        $yearSchool = trim($_POST["yearSchool"]);
        $termName = trim($_POST["termName"]);
        $stage = trim($_POST["stage"]);
    if(!$conn) {
        die("Connect failed");
    } else {
        $output = '';
                $output .= '<table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Mã SV</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Lớp</th>
                        <th scope="col">Môn học</th>
                        <th scope="col">Điểm</th>
                    </tr>
                </thead>';

            $sql = "SELECT Students.userID, Users.userName, Classes.className, Marks.totalMark, Subjects.subjectName
            FROM
            Marks
            INNER JOIN Students ON Marks.userID = Students.userID
            INNER JOIN Users ON Marks.userID = Users.userID
            INNER JOIN Subjects ON Marks.subjectID = Subjects.subjectID
            INNER JOIN Terms ON Marks.termID = Terms.termID
            INNER JOIN Classes ON Marks.classID = Classes.classID
            WHERE Students.userID = '$userID' AND Students.CMT = '$CMT' AND Terms.yearSchool = '$yearSchool' AND Terms.termName = '$termName' AND Terms.stage = '$stage'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $output .= '<tr>
                <td>'.$row['userID'].'</td>
                <td>'.$row['userName'].'</td>
                <td>'.$row['className'].'</td>
                <td>'.$row['subjectName'].'</td>
                <td>'.$row['totalMark'].'</td>
            </tr>';
            }
                echo json_encode(["status"=>true, "data" => $output ]);
            }
?>
