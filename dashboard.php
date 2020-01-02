<?php
session_start();

if (!isset($_SESSION['level'])) {
    header('Location: index.php');
}
// } else if(($_SESSION['level'] === 3)) {
//         header('Location: members.php');
//         }
?>
<!Doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin/style.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
    <script src="admin/ckeditor/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <?php if (isset($_SESSION['idUser'])) {
        require('mysqli_connect.php');
        $accID = $_SESSION['idUser'];
        $sql = "SELECT * FROM Account WHERE accID = $accID ";
        $user = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($user);
    }
    ?>
    <div class="alert alert-success notify-success p-13" role="alert">
    </div>
    <div class="wrapper">
        <div class='sidebar'>
            <div class="sidebar-wrapper">
                <div class="logo">
                    <img class="img-logo" src="admin/assets/img/wru.png" alt="Logo" />
                    <a class="link-tlu" href="index.php" alt="Trang chủ">Đại học thuỷ lợi</a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-grid-45"></i>
                            <span class="nav-item-title">HOME</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#component1">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <span class="nav-item-title">NEWS<i class="fas fa-caret-down"></i></span>
                        </a>
                        <ul class="nav collapse" id="component1">
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="dashboard.php?category=newPost">
                                    <span class="link-name-mini">AP</span>
                                    <span class="link-name-normal nav-item-title">Add Posts</span>
                                </a>
                            </li>
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="dashboard.php?category=newAccount">
                                    <span class="link-name-mini">NA</span>
                                    <span class="link-name-normal nav-item-title">New Account</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#component2">
                            <i class="nc-icon nc-single-02"></i>
                            <span class="nav-item-title">USERS<i class="fas fa-caret-down"></i></span>
                        </a>
                        <ul class="nav collapse" id="component2">
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="dashboard.php?category=manageUser">
                                    <span class="link-name-mini">MU</span>
                                    <span class="link-name-normal nav-item-title">Manager Users</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/drl/faqs">
                            <i class="nc-icon nc-bulb-63"></i>
                            <span class="nav-item-title">FAQs</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class='main-content white-space'>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="sidebar-toggle">
                            <button id="btn-toggle" class="sidebar-toggle-btn">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                        <div>
                            <div class="nav-search w25vw ">
                                <input type="text" class="form-control" placeholder="Tìm kiếm..." />
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            <div class="users-wrapper">
                                <div class="users-info">
                                    <span><?= $row['firstName'] . ' ' . $row['lastName']; ?></span>
                                </div>
                                <ul class="nav users-dropdown" id="component3">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/drl/profile">
                                            <i class="nc-icon nc-circle-09"></i>
                                            <span class="link-name-normal">My Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/drl/pwd">
                                            <i class="nc-icon nc-refresh-02"></i>
                                            <span class="link-name-normal">Change Password</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="layout/logout.php">
                                            <i class="nc-icon nc-button-power"></i>
                                            <span class="link-name-normal text-danger">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <?php
            if (isset($_GET['category'])) {
                $category = $_GET['category'];
            } else {
                $category = '';
            }
            switch ($category) {
                case "newPost":
                    include('admin/newPosts.php');
                    break;
                case "newAccount":
                    include('admin/newAccount.php');
                    break;
                case "manageUser":
                    include('admin/manageUser.php');
                    break;
                default:
                    include('admin/home.php');
                    break;
            }
            ?>
        </div>
    </div>
    <script>
        if ($("#contentPost").length) {
            CKEDITOR.replace('contentPost',
            {

                filebrowserBrowseUrl : 'admin/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl : 'admin/ckfinder/ckfinder.html?type=Images',
                filebrowserFlashBrowseUrl : 'admin/ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl : 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl : 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                filebrowserFlashUploadUrl : 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            });
        }
    </script>
    <script src="admin/assets/js/script.js"></script>
    <script src="admin/assets/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
