<?php
require_once 'menu.php';
require_once 'functions.php';
global $con;
//var_dump($_POST['search']);
$s=$_POST['search'];

$searchreq="SELECT * FROM videos WHERE titre LIKE '%$s%'";
//die($searchreq);
$searchres=mysqli_query($con,$searchreq);
//print_r($searchres);die();
?>

<div class="container">
    <div class="row">
        <?php
        while ($v = mysqli_fetch_assoc($searchres)):
            ?>

            <div class="col-md-4 mt-3">
                <?= url_format($v['url']) ?>
                <div style="margin-top: -9px">
                    <!--a href='lecteur.php?url=<?= $v['url'] ?>&titre=<?= str_replace("'", "\'", $v['titre']) ?>'>

            </a-->
                    <a href="lecteur.php?id=<?= $v['video_id'] ?>"><?= substr($v['titre'], 0, 40) . '...' ?></a>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
</div>
