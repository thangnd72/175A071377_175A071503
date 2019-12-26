<?php
    session_start();

    if($_SESSION['level'] == 1 || $_SESSION['level'] == 2) {
        require('../../mysqli_connect.php');
        $category = trim($_POST["category"]);
        $title = trim($_POST["title"]);
        $content = trim($_POST["content"]);
        $author = trim($_POST["author"]);
        $id = (int) $_SESSION['idUser'];
        $description = trim($_POST["description"]);
        $sql= "INSERT INTO Posts(category, titlePost, content, author, accID, description) VALUES ('$category', '$title', '$content', '$author', '$id', '$description')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo json_encode(["status" => true, "message" => "Good"]);
        } else {
            echo json_encode(["status" => false, "message" => $sql]);
        }
    }
?>
