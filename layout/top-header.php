<div class="top-header">
    <div class="container-fluid">
        <div class="row inner-header">
            <div class="col-md-6 position-relative">
                <div id="left-top-header">
                    <ul>
                        <div class="d-flex justify-content-around align-items-center inner-top-left">
                            <div class="name-school">
                                <li><a href=""><span>Trường đại học Thuỷ Lợi<span></a></li>
                            </div>
                            <div class="info-contact">
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <a href="#">(024) 3852 2201</a>
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="#">phonghcth@tlu.edu.vn</a>
                                </li>
                            </div>
                            <div class="info-icon">
                                <a href="#"><i class="fas fa-location-arrow"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 p-auto">
                <div id="right-top-header">
                    <div class="d-flex justify-content-center align-items-center inner-top-right">
                        <div class="search">
                            <form action="" class="form-inline mr-5">
                                <input class="form-control mr-2" type="text" placeholder="Tìm kiếm...">
                                <button type="submit" class="btn btn-success">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="login">
                            <?php if (isset($_SESSION['idUser'])) {
                                $accID = $_SESSION['idUser'];
                                $sql = "SELECT * FROM Account WHERE accID = $accID ";
                                $user = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($user);
                            ?>
                                <div class="dropdown">
                                    <span class="dropdown-toggle" data-toggle="dropdown">Xin chào <?= $row['lastName']; ?></span>
                                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenu2">
                                        <a href="<?php
                                            if (isset($_SESSION['level']) == 1 || isset($_SESSION['level']) == 2) {
                                                echo "dashboard.php";
                                            }
                                        ?>" class="dropdown-item" style="font-size: 1.2rem; color: black">Change Password</a>
                                        <a href="layout/logout.php"class="dropdown-item" style="font-size: 1.2rem; color: black">Log Out</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <i class="fas fa-sign-out-alt"></i><a href="#" class="lg"data-toggle="modal" data-target="#login-form">Login/Register</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
