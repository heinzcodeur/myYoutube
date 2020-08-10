<?php
require_once 'menu.php';
require_once 'db_connect.php';
require_once 'functions.php';
//print_r($_POST);die();
$s=$_POST['search'];

$start=isset($_GET['start'])?$_GET['start']:0;
//print_r($start);die();
$limit=6;
$nb_pages=ceil(mysqli_num_rows(mysqli_query($con,"SELECT * FROM videos"))/6);
//print_r($nb_pages);die();
if($s){
$req="SELECT * FROM videos WHERE titre LIKE '%$s%'";
}else{
    $req="SELECT * FROM videos LIMIT $start,$limit";
    //die($req);
}


$videos=mysqli_query($con,$req);

?>


<div class="container mt-4 myback">

    <div class="row">
        <?php
        while ($v = mysqli_fetch_assoc($videos)):

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
    <div class="row" id="row2">
        <ul>
            <?php
            for($i=0;$i<$nb_pages;$i++):
            ?>
            <li><a href="index.php?start=<?=$i*6?>"><?=$i?></a></li>
            <?php endfor;?>
        </ul>
    </div>
</div>
