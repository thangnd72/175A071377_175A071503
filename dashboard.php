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
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin/style.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</head>

<body>
    <div class="wrapper">
        <div class='sidebar'>
            <div class="sidebar-wrapper">
                <div class="logo">
                    <img class="img-logo" src="admin/assets/img/wru.png" alt="Logo" />
                    <a class="link-tlu" href="/drl" alt="Trang chủ">Đại học thuỷ lợi</a>
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
                        <a class="nav-link" href="/drl">
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
                                <a class="nav-link" href="/drl/points/formula">
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
                                <a class="nav-link" href="/drl/points/statistic">
                                    <span class="link-name-mini">TM</span>
                                    <span class="link-name-normal nav-item-title">Thêm người dùng</span>
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
                                        <a class="nav-link" href="#">
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
            <div class="content-wrapper white-space mw-auto">


                <!-- ADD USER -->

                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Thêm người dùng
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group  col-12">
                                    <label>Mã ID</label>
                                    <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" />
                                </div>
                                <div class="form-group  col-12">
                                    <label>Họ và tên</label>
                                    <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" />
                                </div>
                                <div class="form-group  col-12">
                                    <label>Ngày sinh</label>
                                    <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" />
                                </div>
                                <div class="form-group  col-12">
                                    <label>Email</label>
                                    <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" />
                                </div>
                                <div class="form-group  col-12">
                                    <label>Mật khẩu</label>
                                    <input type="password"
                                        class="d-block mw-auto w-100 form-fields form-control w-25" />
                                </div>
                                <div class="form-group col-12">
                                    <label>Vai trò:</label>
                                    <select class="form-control" name="" id="permission">
                                        <option>Admin</option>
                                        <option>Giảng viên</option>
                                        <option>Sinh viên</option>
                                    </select>
                                </div>
                            </div>
                            <a class="text-decoration-none" href="/drl/users/add"><input type="button"
                                    class="btn btn-outline-secondary" value="Thêm mới" /></a>
                        </div>
                    </div>
                </div>

                <!-- ------------- -->



                <!-- USER MANAGEMENT -->
                <!-- <div class="user-management col-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Quản lí người dùng</h3>
                            <div class="status-bar mt-3 d-flex">
                                <form>
                                    <input type="text" class="textbox" placeholder="Search" />
                                </form>
                                <button title="Tìm kiếm" type="submit" class="button"><i
                                        class="fas fa-search"></i></button>
                                <a class="text-decoration-none ml-auto" href="/dashboard/users/add"><input type="button"
                                        class="btn btn-outline-secondary" value="Thêm người dùng" /></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="list-users mt-5 table-responsive">
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Họ và tên</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Vai trò</th>
                                            <th scope="col">Ngày tạo</th>
                                            <th scope="col">Xử lí</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Đỗ Ngọc Minh</td>
                                            <td>minhreal13@gmail.com</td>
                                            <td>Admin</td>
                                            <td>2019/12/13</td>
                                            <td class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-outline-secondary mr-2"><i
                                                        class="fas fa-info"></i></button>
                                                <a href="#"><button type="button" class="btn btn-outline-info mr-2"><i
                                                            class="fas fa-edit"></i></button></a>
                                                <button type="button" class="btn btn-outline-danger"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

                <!-- ------------- -->
            </div>
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="admin/assets/js/script.js"></script>
</body>

</html>
