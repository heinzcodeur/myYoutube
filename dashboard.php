<?php
//session_start();
require_once 'db_connect.php';
require_once 'menu.php';
$id=isset($_SESSION['user_id'])?$_SESSION['user_id']:'';

//print_r($req);die();

?>


<div class="container mt-4">
    <div class="row" style="cursor: pointer">
        <div class="col-md-12" style="border: 1px solid;width:500px;border-radius: 5px" id="first">
            <h3>mes videos</h3>
            <div>
            <ul>
                <?php
                if ($id):


                        $req = "SELECT * FROM videos where author='$id'";
                        $res = mysqli_query($con, $req);
                    while ($a = mysqli_fetch_assoc($res)):
                        ?>
                        <li><a href="lecteur.php"> <?=substr($a['titre'],0,60) ?></a></li>

                    <?php
                    endwhile;
                endif;
                ?>
            </ul>
            </div>

        </div>
        <div class="col-md-12" style="border: 1px solid;width:500px;border-radius: 5px" id="second">
            <h3>mon historique</h3>
            <div style="display:none;">
                <ul>
                    <li>essai</li>
                    <li>essai</li>
                    <li>essai</li>
                    <li>essai</li>
                    <li>essai</li>
                    <li>essai</li>
                </ul>
            </div>

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


</script>
