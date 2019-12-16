<div class="banner">
    <div class="container">
        <div class="d-flex flex-row">
            <div class="col-md-6 col-12 pl-0 pr-1">
                <div class="left-banner position-relative">
                    <img class="w-100 h-100 o-9" src="images/students-banner.jpg" alt="">
                    <div class="text-banner">
                    <?php
                        $sql="SELECT * FROM Posts WHERE category like 'presentStudent' ORDER BY idPost DESC LIMIT 1";
                        $student=mysqli_query($conn, $sql);
                        $row=mysqli_fetch_array($student);
                    ?>
                        <span>Sinh viên</span>
                        <a href="index.php?category=<?= $row['category']; ?>&idPost=<?= $row['idPost']; ?>">
                            <h3><?= $row['titlePost']; ?></h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 p-0">
                <div class="right-banner">
                    <div class="wrapper-banner h-100">
                        <div class="col-12 h-55 p-0 pb-1">
                            <div class="top-banner position-relative h-100">
                                <img class="w-100 h-100 o-9" src="images/teacher-banner.jpg" alt="">
                                <div class="text-banner">
                                <?php
                                    $sql1="SELECT * FROM Posts WHERE category like 'oldStudent' ORDER BY idPost DESC LIMIT 1";
                                    $student=mysqli_query($conn, $sql1);
                                    $row1=mysqli_fetch_array($student);
                                ?>
                                    <span>Cựu sinh viên</span>
                                    <a href="index.php?category=<?= $row1['category']; ?>&idPost=<?= $row1['idPost']; ?>">
                                        <h3><?= $row1['titlePost']; ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 h-45 p-0">
                            <div class="bottom-banner h-100">
                                <div class="row h-100">
                                    <div class="col-md-6 col-12 pr-0">
                                        <div class="left-content position-relative w-100 h-100">
                                            <img class="w-100 h-100 o-9" src="images/events-banner.jpg" alt="">
                                            <div class="text-banner">
                                            <?php
                                                $sql2="SELECT * FROM Posts WHERE category like 'events' ORDER BY idPost DESC LIMIT 1";
                                                $event=mysqli_query($conn, $sql2);
                                                $row2=mysqli_fetch_array($event);
                                            ?>
                                                <span>Sự kiện</span>
                                                <a href="index.php?category=<?= $row2['category']; ?>&idPost=<?= $row2['idPost']; ?>">
                                                    <h3><?= $row2['titlePost']; ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 pl-1">
                                        <div class="right-content position-relative w-100 h-100">
                                            <img class="w-100 h-100 o-9" src="images/business-banner.jpg"
                                                        alt="">
                                            <div class="text-banner">
                                            <?php
                                                $sql3="SELECT * FROM Posts WHERE category like 'business' ORDER BY idPost DESC LIMIT 1";
                                                $business=mysqli_query($conn, $sql3);
                                                $row3=mysqli_fetch_array($business);
                                            ?>
                                                <span>Doanh nghiệp</span>
                                                <a href="index.php?category=<?= $row3['category']; ?>&idPost=<?= $row3['idPost']; ?>">
                                                    <h3><?= $row3['titlePost']; ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
