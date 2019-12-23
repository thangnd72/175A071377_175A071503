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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
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
    <div class="wrapper">
        <div class='sidebar'>
            <div class="sidebar-wrapper">
                <div class="logo">
                    <img class="img-logo" src="admin/assets/img/wru.png" alt="Logo" />
                    <a class="link-tlu" href="index.php" alt="Trang chủ">Đại học thuỷ lợi</a>
                </div>
                <ul class="nav">
                    <li class="nav-item" id="user-nav">
                        <a class="nav-link" data-toggle="collapse" href="#component">
                            <i class="nc-icon nc-single-02"></i>
                            <span class="nav-item-title">Đỗ Ngọc Minh<i class="fas fa-caret-down"></i></span>
                        </a>
                        <ul class="nav collapse" id="component">
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="/drl/profile">
                                    <span class="link-name-mini"><i class="nc-icon nc-circle-09 fz-1em"></i></span>
                                    <span class="link-name-normal nav-item-title">Hồ sơ cá nhân</span>
                                </a>
                            </li>
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="/drl/pwd">
                                    <span class="link-name-mini"><i class="nc-icon nc-refresh-02 fz-1em"></i></span>
                                    <span class="link-name-normal nav-item-title">Đổi mật khẩu</span>
                                </a>
                            </li>
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="/">
                                    <span class="link-name-mini"><i class="nc-icon nc-button-power fz-1em"></i></span>
                                    <span class="link-name-normal nav-item-title">Đăng xuất</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-grid-45"></i>
                            <span class="nav-item-title">TRANG CHỦ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#component1">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <span class="nav-item-title">TIN TỨC<i class="fas fa-caret-down"></i></span>
                        </a>
                        <ul class="nav collapse" id="component1">
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="/drl/points/add">
                                    <span class="link-name-mini">DS</span>
                                    <span class="link-name-normal nav-item-title">Danh sách bài viết</span>
                                </a>
                            </li>
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="dashboard.php?category=newPost">
                                    <span class="link-name-mini">TM</span>
                                    <span class="link-name-normal nav-item-title">Thêm bài viết</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#component2">
                            <i class="nc-icon nc-single-02"></i>
                            <span class="nav-item-title">NGƯỜI DÙNG<i class="fas fa-caret-down"></i></span>
                        </a>
                        <ul class="nav collapse" id="component2">
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="/drl/points">
                                    <span class="link-name-mini">DS</span>
                                    <span class="link-name-normal nav-item-title">Danh sách người dùng</span>
                                </a>
                            </li>
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="dashboard.php?category=newUser">
                                    <span class="link-name-mini">TM</span>
                                    <span class="link-name-normal nav-item-title">Thêm người dùng</span>
                                </a>
                            </li>
                            <li class="nav-item nav-child">
                                <a class="nav-link" href="dashboard.php?category=manageUser">
                                    <span class="link-name-mini">QL</span>
                                    <span class="link-name-normal nav-item-title">Quản lý người dùng</span>
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
                            <!-- <button id="btn-mini" class="sb-toggle-btn-mini">
                                        <i class="fas fa-bars"></i>
                                    </button> -->
                        </div>
                        <div>
                            <div class="nav-search w25vw ">
                                <input type="text" class="form-control" placeholder="Tìm kiếm..." />
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            <div class="users-wrapper">
                                <div class="users-info">
                                    <h5>Đỗ Ngọc Minh(175A071515)</h5>
                                    <span>Sinh viên</span>
                                </div>
                                <ul class="nav users-dropdown" id="component3">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/drl/profile">
                                            <i class="nc-icon nc-circle-09"></i>
                                            <span class="link-name-normal">Hồ sơ cá nhân</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/drl/pwd">
                                            <i class="nc-icon nc-refresh-02"></i>
                                            <span class="link-name-normal">Đổi mật khẩu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="layout/logout.php">
                                            <i class="nc-icon nc-button-power"></i>
                                            <span class="link-name-normal">Đăng xuất</span>
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
                case "newUser":
                    include('admin/newUser.php');
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
