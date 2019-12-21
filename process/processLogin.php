<?php
    session_start();

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    require('../mysqli_connect.php');

    if (!$conn) {
        die("Connect failed");
    } else {
    $sql = "SELECT * FROM Account WHERE email like '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
        if($num === 0) {
            //Không tồn tại email thì thông báo
            echo json_encode(["status" => "error1", "message1" => "Your email does not exist in the database"]);
        } else {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])) {
                $_SESSION['level'] = (int) $row["level"];
                $_SESSION['idUser'] = (int) $row["accID"];
                $_SESSION['userID'] = ($row["userID"] != NULL) ? $row["userID"] : 'Guest';
                $url=$_SERVER['HTTP_REFERER'];
                echo json_encode(['status' => 'success', 'url'=>$url]);
            } else {
                echo json_encode(['status' => "error2", "message2" => "Password is not correct."]);
            }
        }
    }
?>
