<?php
require_once 'menu.php';
require_once 'db_connect.php';
require_once 'functions.php';
//print_r($_POST);die();
$s=$_POST['search'];

$start=isset($_GET['start'])?$_GET['start']:0;
//print_r($start);die();
$nb_pages=ceil(mysqli_num_rows(mysqli_query($con,"SELECT * FROM videos"))/6);


$videos=displayVideos($s,$start);

?>


<div class="container mt-4 myback">

    <div class="row">
        <?php
        afficheVideos($videos);

        ?>

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
