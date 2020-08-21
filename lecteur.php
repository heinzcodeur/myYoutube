<?php
require_once 'menu.php';
require_once 'functions.php';
$user_id=$_SESSION['user_id'];
$mess=isset($_GET['mess']) && $_GET['mess']==2?"Only Admin Users may delete comments!":null;

$req="SELECT * FROM videos LIMIT 0,6";
$res=mysqli_query($con,$req);
//print_r($_GET);die();
$url=isset($_GET['url'])?$_GET['url']:"";
$id=isset($_GET['id'])?$_GET['id']:"";
$titre=isset($_GET['titre'])?$_GET['titre']:"";

//$req2="SELECT * FROM videos where video_id='$id'";
$req2=mySelect('videos','video_id','=',$id);
//die($req2);
$res2=mysqli_fetch_assoc(mysqli_query($con,$req2));
//print_r($res2);die();
if(!$res2){header('Location:index.php');}

$histocheck="SELECT * FROM historique WHERE video_id='$id' AND user_id='$user_id'";
//$histocheck=mySelect('historique','video_id','=',$user_id,'','');
//die($histocheck);
$histocheckres=mysqli_query($con,$histocheck);
if(mysqli_num_rows($histocheckres)<1){
$historeq="INSERT INTO historique(video_id,user_id,date_vision) VALUES ('$id','$user_id',NOW())";
//die($historeq);
mysqli_query($con,$historeq);
}
//die('non');
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php if($mess):?>
        <div class="alert alert-danger"><?=$mess?></div>
            <?php endif;?>
            <?=str_replace(['560','315'],['770','515'],$res2['url'])?>
            <h5><?=$res2['titre'] ?></h5>
            <br>
            <p>vidéo ajoutée le <?=$res2['date_ajout']?>&nbsp;par <i><?=getAuthor($res2['author'])?></i></p>
            <br>
            <h3>Commentaires</h3>
            <?php if($_SESSION['user_id']): ?>
            <h6><i><?=ucfirst($_SESSION['nickname'])?>&nbsp;</i>ajouter un commentaire</h6>
                <form action="comment.php" method="post">
                    <div class="form-group">
                        <input class="form-control" name="comment">
                        <input type="hidden"name="video" value="<?=$id?>">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        envoyer
                    </button>
                </form>
                <br>
            <?php else:?>
            <h6><a href="connexion.php"><i>connectez-vous pour ajouter un commentaire!</i></a></h6>
            <?php endif;?>
            <ul>
            <?php
            $com=mySelect('comments','video_id','=',$id);
            $comres=mysqli_query($con,$com);
            while($comm=mysqli_fetch_assoc($comres)):
            ?>
                <li>
                    <b><?= ucfirst(user_search($comm['user_id'])) ?>&nbsp;&nbsp;</b><?= ucfirst($comm['comment']) ?>
                    &nbsp;
                    <a href="comment.php?task=delete&comm_id=<?=$comm['comment_id']?>&video_id=<?=$id?>">
                        <!--button class="btn mybtn">supprimer</button-->
                        <img src="criss-cross.png" width="28" height="29" alt="DEL" >
                    </a>
                </li>
            <?php endwhile;?>
            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                <?php
                while($val=mysqli_fetch_assoc($res)):
                ?>
                <li><?= str_replace(['560', '315'], ['290', '145'], $val['url']) ?>
                    <div>
                        <span>
                            <a href='lecteur.php?id=<?= $val['video_id'] ?>'><?= substr($val['titre'], 0, 23) . '...' ?></a>
                        </span>
                    </div>
                </li>
                <?php endwhile;?>
            </ul>
        </div>
    </div>
</div>
