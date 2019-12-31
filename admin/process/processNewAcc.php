<?php
    session_start();

    if($_SESSION['level'] == 1) {
        require('../../mysqli_connect.php');

            $firstName = trim($_POST["firstName"]);
            $lastName = trim($_POST["lastName"]);
            $email = trim($_POST["email"]);
            $password = trim($_POST["password"]);
            $userID = trim($_POST["userID"]);
            $job = trim($_POST["job"]);
            $userName = $firstName . ' ' .$lastName;
            $phone = trim($_POST["phone"]);
            $contact = trim($_POST["contact"]);
            $level = (int) trim($_POST["level"]);
        if(!$conn) {
            die('Connect failed!');
        } else {
            $s1 = "SELECT * FROM Account WHERE email like '$email'";
            $result = mysqli_query($conn, $s1);
            $num = mysqli_num_rows($result);
                if($num === 1) {
                    echo json_encode(["status" => false, "error" => "existMail", "message" => "Email already exist"]);
                } else {
                    $hash_password = password_hash($password, PASSWORD_DEFAULT);
                    if($userID != '') {
                        $s2 = "SELECT * FROM Users WHERE userID like '$userID'";
                        $result2 = mysqli_query($conn, $s2);
                        $num2 = mysqli_num_rows($result2);
                        if( $num2 === 1) {
                            echo json_encode(["status" => false, "error"=>"existPerson", "message" => "User ID already exist"]);
                        } else {
                            $sql1 = "INSERT INTO Users(userID, userName, phone, contact, job) VALUES ('$userID', '$userName', '$phone', '$contact', '$job')";
                            $req1 = mysqli_query($conn, $sql1);
                            $sql2 = "INSERT INTO Account(userID, firstName, lastName, email, password, level) VALUES ('$userID', '$firstName', '$lastName', '$email', '$hash_password', '$level')";
                            $req2 = mysqli_query($conn, $sql2);
                            if($req1 && $req2) {
                                echo json_encode(['status' => true]);
                            } else {
                                echo json_encode(["status" => false, "message" => "SQL1 FAILED"]);
                            }
                        }
                    } else {
                        $sql = "INSERT INTO Account(firstName, lastName, email, password, level) VALUES ('$firstName', '$lastName', '$email', '$hash_password', '$level')";
                        $req = mysqli_query($conn, $sql);
                        if($req) {
                            echo json_encode(['status' => true]);
                        } else {
                            echo json_encode(["status" => false, "message" => "SQL2 FAILED"]);
                        }
                    }
                }
        }
    }

?>
