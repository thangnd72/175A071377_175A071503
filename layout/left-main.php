
<div class="col-md-9 col-12">
    <div class="left-main">
        <div class="title-news">
            <h3>Tin tức</h3>
        </div>
        <div class="d-flex inner-left-main">
            <div class="col-md-7 col-12 p-0">
                <div class="news">
                    <?php
                    $sql="SELECT * FROM Posts WHERE category like 'news' ORDER BY idPost DESC LIMIT 1";
                        $news=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($news)){
                    ?>
                    <img class="w-100 h-100 mb-3" src="<?= $row['imgPost']?>" alt="">
                    <div class="news-content">
                        <h3><a href="index.php?category=news&idPost=<?= $row['idPost'] ;?>"><?= $row['titlePost'] ;?></a></h3>
                        <p class="description"><?= $row['description']?></p>
                    </div>
                        <?php } ?>
                </div>
            </div>
            <div class="col-md-5 col-12">
                <div class="news-list">
                    <?php
                    $sql="SELECT * FROM Posts WHERE category like 'news' ORDER BY idPost DESC LIMIT 1,4";
                        $news=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($news)){
                    ?>
                    <ul>
                        <li><a href="index.php?category=news&&idPost=<?= $row['idPost']?>"><?= $row['titlePost']?></a></li>
                    </ul>
                    <?php } ?>
                    <a class="see-more" href="#">Xem tất cả..</a>
                </div>
            </div>
        </div>
    </div>
</div>
