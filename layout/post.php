<?php
    if(isset($_GET['idPost'])){
        $idPost=$_GET['idPost'];
    }
?>
<section class="inner-content mt-5">
    <div class="container">
        <?php
        $sql="SELECT * FROM Posts WHERE category like '$category' AND idPost = '$idPost' ORDER BY idPost DESC ";
            $news=mysqli_query($conn, $sql);
            while ($row=mysqli_fetch_array($news)) {
        ?>
        <div class="row">
            <div class="col-md-9 col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb f-13">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href=""><?= $row['category']?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $row['titlePost']?></li>
                    </ol>
                </nav>
                <article class="pt-4">
                    <h5><?= $row['dateCreated'] ;?></h5>
                    <h2><?= $row['titlePost']?></h2>
                    <div class="text"><?= $row['content']?></div>
                    <div class="author float-right pr-5">Tác giả: <?= $row['author']?></div>
                </article>
            </div>
            <?php }?>
            <div class="col-md-3 col-12">
                <div class="title-post">
                    <h3>Bài viết liên quan</h3>
                </div>
                <div class="list-category">
                    <ul class="container pt-3 pl-3">
                    <?php
                    $sql="SELECT * FROM Posts WHERE category like '$category' AND idPost not like '$idPost' ";
                        $news=mysqli_query($conn, $sql);
                        while ($row=mysqli_fetch_array($news)) {
                    ?>
                        <li><i class="fas fa-caret-right pr-2"></i><a href="index.php?category=<?= $row['category']?>&idPost=<?= $row['idPost']?>"><?= $row['titlePost']?></a></li>
                        <?php } ?>
                    </ul>
                    <div class="notify category mt-5">
                        <h3>Danh mục</h3>
                    </div>
                    <ul class="container pt-3 pl-3">
                        <li><i class="fas fa-caret-right pr-2"></i><a href="#">Tin tức</a></li>
                        <li><i class="fas fa-caret-right pr-2"></i><a href="#">Thông báo</a></li>
                        <li><i class="fas fa-caret-right pr-2"></i><a href="#">Sinh viên</a></li>
                        <li><i class="fas fa-caret-right pr-2"></i><a href="#">Sự kiện</a></li>
                        <li><i class="fas fa-caret-right pr-2"></i><a href="#">Cựu sinh viên</a></li>
                        <li><i class="fas fa-caret-right pr-2"></i><a href="#">Doanh nghiệp</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
