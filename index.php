<?php
require_once 'menu.php';
require_once 'db_connect.php';
require_once 'functions.php';
//print_r($_POST);die();
$s=$_POST['search'];
$start=isset($_GET['start'])?$_GET['start']:0;
$nb_pages=ceil(getnbpages($s)/6);

?>


<div class="container mt-4 myback">

    <div class="row">
        <?php
        videos($nb_pages,$start,$s);
        ?>

    </div>
    <div class="row" id="row2">
        <ul>
            <?php
            paginer($nb_pages);
            ?>
        </ul>
    </div>
</div>
