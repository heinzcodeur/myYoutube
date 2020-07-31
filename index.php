<?php
require_once 'menu.php';
require_once 'db_connect.php';

$req="SELECT * FROM videos";
$videos=mysqli_query($con,$req);

?>


    <div class="container">
    <!--div class="bg-primary text-light"><span>MyYoutube</span><button class="text-right">connexion</button></div-->
    <div class="row mt-4">
        <?php
        while ($v=mysqli_fetch_assoc($videos)):

        ?>
        <!--div class="col-md-6"><iframe width="540" height="315" src="https://www.youtube.com/embed/U0CGsw6h60k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="col-md-6"><iframe width="540" height="315" src="https://www.youtube.com/embed/lWA2pjMjpBs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div-->
        <div class="col-md-4">
            <?=str_replace(['560','315'],['340','264'],$v['url']) ?>
            <a href="lecteur.php"><?=$v['titre']?></a><br><br>
        </div>
        <?php endwhile;?>
        <!--div class="col-md-6"><iframe width="542" height="315" src="https://www.youtube.com/embed/rwqruN8Nh6M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    </div> 
    <p class="text-right">Lorem ipsums sequi quod fuga? Sed, non?</p!-->
    </div>    
