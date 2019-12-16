<section class="bottom-content">
    <div class="container">
        <div class="inner-bottom-content">
            <div class="title-news">
                <h3>Sinh viên</h3>
            </div>
            <div class="d-flex wrapper-content">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="content">
                            <img class="w-100 h-100" src="images/banner-student1.png" alt="">
                            <div class="popular-news future-student">
                                <ul>
                                    <?php
                                    $sql="SELECT * FROM Posts WHERE category like 'futureStudent' ORDER BY idPost DESC LIMIT 4";
                                        $student=mysqli_query($conn, $sql);
                                        while($row=mysqli_fetch_array($student)){
                                    ?>
                                    <li><a href="index.php?category=futureStudent&idPost=<?= $row['idPost'];?>"><?= mb_substr($row['titlePost'], 0, 45); ?>...</a></li>
                                        <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 ">
                        <div class="content">
                            <img class="w-100 h-100" src="images/banner-student2.png" alt="">
                            <div class="popular-news present-student">
                                <ul>
                                    <?php
                                    $sql="SELECT * FROM Posts WHERE category like 'presentStudent' ORDER BY idPost DESC LIMIT 4";
                                        $student=mysqli_query($conn, $sql);
                                        while($row=mysqli_fetch_array($student)){
                                    ?>
                                    <li><a href="index.php?category=presentStudent&idPost=<?= $row['idPost'];?>"><?= mb_substr($row['titlePost'], 0, 45); ?>...</a></li>
                                        <?php } ?>
                                    <!-- <li><a href="#">Thư gửi "Tôi của ngày hôm qua"</a></li>
                                    <li><a href="#">Thông báo mở lớp ôn luyện OLP Toán học...</a></li>
                                    <li><a href="#">Sinh viên Trường Đại học Thủy Lợi toả...</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="content">
                            <img class="w-100 h-100" src="images/banner-student3.png" alt="">
                            <div class="popular-news old-student">
                                <ul>
                                    <?php
                                    $sql="SELECT * FROM Posts WHERE category like 'oldStudent' ORDER BY idPost DESC LIMIT 4";
                                        $student=mysqli_query($conn, $sql);
                                        while($row=mysqli_fetch_array($student)){
                                    ?>
                                    <li><a href="index.php?category=oldStudent&idPost=<?= $row['idPost'];?>"><?= mb_substr($row['titlePost'], 0, 45); ?>...</a></li>
                                        <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
