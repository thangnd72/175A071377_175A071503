<div class="col-md-3 col-12">
    <div class="right-main">
        <div class="notify">
            <h3>Thông báo</h3>
        </div>
        <div class="notice">
            <?php
            $sql="SELECT * FROM Posts WHERE category like 'notify' ORDER BY idPost DESC LIMIT 4";
                $notify=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($notify)){
            ?>
            <ul>
                <li><a href="index.php?category=notify&idPost=<?= $row['idPost'];?>"><?= $row['titlePost'];?></a></li>
            </ul>
            <?php } ?>
            <a class="see-more" href="#">Xem tất cả..</a>
        </div>
    </div>
</div>
