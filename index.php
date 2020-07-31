<?php
require_once 'menu.php';
require_once 'db_connect.php';

$req="SELECT * FROM videos";
$videos=mysqli_query($con,$req);

?>


    <div class="container mt-4">
    <!--div class="bg-primary text-light"><span>MyYoutube</span><button class="text-right">connexion</button></div-->
    <div class="row">
        <?php
        while ($v=mysqli_fetch_assoc($videos)):

        ?>
        <!--div class="col-md-6"><iframe width="540" height="315" src="https://www.youtube.com/embed/U0CGsw6h60k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="col-md-6"><iframe width="540" height="315" src="https://www.youtube.com/embed/lWA2pjMjpBs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div-->
        <div class="col-md-4 mt-3">
            <?=str_replace(['560','315'],['340','264'],$v['url']) ?>
            <div style="margin-top: -9px">
            <a href='lecteur.php?url=<?=$v['url']?>&titre=<?=str_replace("'","\'",$v['titre'])?>'>
                <?=substr($v['titre'],0,40).'...'?>
            </a></div>
        </div>
        <?php endwhile;?>
        <!--div class="col-md-6"><iframe width="542" height="315" src="https://www.youtube.com/embed/rwqruN8Nh6M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    </div> 
    <p class="text-right">Lorem ipsums sequi quod fuga? Sed, non?</p!-->
    </div>    
