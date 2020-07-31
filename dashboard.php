<?php
//session_start();
require_once 'db_connect.php';
require_once 'menu.php';
$id=isset($_SESSION['user_id'])?$_SESSION['user_id']:'';

//print_r($req);die();

?>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-6" style="border: 1px solid;width:500px;border-radius: 5px">
            <h3>mes videos</h3>
            <ul>
                <?php
                if ($id):


                        $req = "SELECT * FROM videos where author='$id'";
                        $res = mysqli_query($con, $req);
                    while ($a = mysqli_fetch_assoc($res)):
                        ?>
                        <li><?= $a['titre'] ?></li>

                    <?php
                    endwhile;
                endif;
                ?>
            </ul>

        </div>
        <div class="col-md-6" style="border: 1px solid;width:500px;border-radius: 5px">
            <h3>mon historique</h3></div>
    </div>
</div>

