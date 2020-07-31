<?php
require_once 'menu.php';
$req="SELECT * FROM videos";
$res=mysqli_query($con,$req);
$url=isset($_GET['url'])?$_GET['url']:"";
$titre=isset($_GET['titre'])?$_GET['titre']:"";
//print_r($titre);die();
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?=str_replace(['560','315'],['770','515'],$url)?>
            <h5><?=$titre ?></h5>
        </div>
        <div class="col-md-3">
            <ul>
                <?php
                while($val=mysqli_fetch_assoc($res)):
                ?>
                <li><?=str_replace(['560','315'],['290','145'],$val['url'])?><div><span><?=substr($val['titre'],0,23).'...'?></span></div></li>
                <?php endwhile;?>
            </ul>
        </div>
    </div>
</div>
