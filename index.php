<?php
    session_start();
    require ('mysqli_connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My university</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <?php include 'layout/top-header.php';?>
            <?php include "layout/login.php"; ?>
            <?php include "layout/register.php"; ?>
        <?php include 'layout/bottom-header.php';?>

    </header>
    <main>
    <?php
    // Switch redirect page
        if(isset($_GET['category'])){
            $category=$_GET['category'];
        } else {
            $category='';
        }
        switch ($category) {
            case "news":
            case "notify":
            case "futureStudent":
            case "oldStudent":
            case "presentStudent":
            case "events";
            case "business";
                if (isset($_GET['idPost'])) {
                    $idPost=$_GET['idPost'];
                    include('layout/post.php');
                }
            break;
            case "student":
                include('layout/studentView.php');
            break;
            default:
                include('layout/home.php');
            break;
        }
    ?>
    </main>
    <footer>
        <?php include 'layout/footer.php';?>
    </footer>
    <script src="js/login.js"></script>
    <script src="js/register.js"></script>
</body>
