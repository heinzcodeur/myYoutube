<?php
//session_start();
require_once 'db_connect.php';
require_once 'menu.php';
require_once 'functions.php';

$id=isset($_SESSION['user_id'])?$_SESSION['user_id']:'';
$user=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users where user_id='$id'"));

?>


<div class="container mt-4">
    <div class="row" style="cursor: pointer">
        <div class="col-md-12 col-sm-12 col-" style="border: 1px solid;width:500px;border-radius: 5px" id="first">
            <h3>mes videos</h3>
            <div>
                <table class="table table-striped color">
                    <tbody>

                    <?php
                if ($id):
                        $req = "SELECT * FROM videos where author='$id' ORDER BY date_ajout DESC";
                        $res = mysqli_query($con, $req);
                    while ($a = mysqli_fetch_assoc($res)):
                            $video_id=$a['video_id']
                        ?>
                    <tr>
                        <td><a href="lecteur.php?id=<?=$video_id?>"> <?=ucfirst(substr($a['titre'],0,60)) ?></a></td>
                        <td><li><a href="lecteur.php?id=<?=$video_id?>"> <?=ucfirst(substr($a['titre'],0,60)) ?></a></td>
                            <td><a href="video_manager.php?id=<?=$video_id?>" class="btn mybtn">modifier</a></td>
                            <td><a href="video_manager.php?id=<?=$video_id?>" class="btn mybtn">supprimer</a></li></td>
                    </tr>
                        <!--hr class="bg-primary"-->
                    <?php
                    endwhile;
                endif;
                ?>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="col-md-12 col-sm-12 col- mt-2" style="border: 1px solid;width:500px;border-radius: 5px" id="second">
            <h3>mon historique</h3>
            <div style="display:none;;">
                <?php
                $historeq = "SELECT * FROM historique h WHERE h.user_id='$id' ORDER BY date_vision DESC";
                $histores = mysqli_query($con, $historeq);
                ?>
                <ul>
                    <?php
                    while ($v = mysqli_fetch_assoc($histores)):
                        ?>
                        <li class="color">
                            <?php
                            $video_id = $v['video_id'];
                            $videores = videos_search($video_id);
                            $titre=$videores['titre'];
                            ?>
                            <a class="color" href="lecteur.php?id=<?=$video_id?>"><?=ucfirst($titre)?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col- mt-2" style="border: 1px solid;width:500px;border-radius: 5px" id="third">
            <h3>mes informations</h3>

            <table class="table table-striped color"             style="display:none">

                <tbody>

                    <tr>
                        <td>pseudo</td>
                        <td><?= $user['nickname'] ?></td>
                        <td>
                            <a href="">&nbsp;</a>
                        </td>
                        <td>
                            <a href="userupdate.php" class="btn color mybtn">modifier</a>
                        </td>
                    </tr>

                    <tr>
                        <td>email</td>
                        <td><?= $user['email'] ?></td>
                        <td>
                            <a href="">&nbsp;</a>
                        </td>
                        <td>
                            <a href="userupdate.php" class="btn color mybtn">modifier</a>
                        </td>
                    </tr>

                    <tr>
                        <td>mot de passe</td>
                        <td><?= $user['mdp'] ?></td>
                        <td>
                            <a href="">&nbsp;</a>
                        </td>
                        <td>
                            <a href="userupdate.php" class="btn color mybtn">modifier</a>
                        </td>

                    </tr>
            </table>

        </div>

    </div>
</div>

<script>
    $("#second").click(function () {
        if ($("#second>div").css('display') == "none") {
            $("#second>div").show();
            $("#first>div").hide();
        } /*else {
            $("#second>div").hide();
            $("#first>div").show();
        }*/

    })
    $("#first").click(function () {
        if ($("#first>div").css('display') == "none") {
            $("#first>div").show();
            $("#second>div").hide();
        } /*else {
            $("#first>div").hide();
            $("#second>div").show();
        }*/

    })

    $("#third").click(function () {
        if ($("#second>div").css('display') == "none") {
            $("#third>table").show();
            $("#first>div").hide();
        }
    })


</script>
