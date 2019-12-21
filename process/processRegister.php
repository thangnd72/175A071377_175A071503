<?php
    session_start();

    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    require ('../mysqli_connect.php');

    if(!$conn) {
        die("Connect failed");
    } else {
    // Kiểm tra email xem tồn tại chưa
    $s = "SELECT * FROM Account WHERE email like '$email'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);
        if($num === 1) {
            // Nếu email đã tồn tại trong CSDL thì thông báo
            echo json_encode(["status" => "error", "message" => "Email already exit"]);
        } else {
            // Đăng ký
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO Account(firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$hash_password')";
            $req = mysqli_query($conn, $sql);
            if($req) {
                echo json_encode(["status" => "success", "message" => "Your account has been created successfully"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Error! Check field input"]);
            }
        }
    }
?>
