<?php
    session_start();
?>
<?php
    if(isset($_SESSION['level'])){
        unset($_SESSION['level']);
        unset($_SESSION['idUser']);
        unset($_SESSION['userID']);
        header("Location: ../index.php");
    }
?>
