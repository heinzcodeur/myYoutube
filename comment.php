<?php
require_once 'menu.php';
require_once 'functions.php';
global $con;

$user=isset($_SESSION['user_id'])?$_SESSION['user_id']:'';
$video_id=isset($_GET['video_id'])?$_GET['video_id']:'';
$comm_id=isset($_GET['comm_id'])?$_GET['comm_id']:'';
$com_id=isset($_POST['com_id'])?$_POST['com_id']:'';
$mess='toupie';

if ($_POST) {
//die('ichi');
    //print_r($_POST);die('r');
    $comment = htmlspecialchars(str_replace("'",'\'',$_POST['comment']));
    $video = htmlspecialchars($_POST['video']);
    $com=str_replace("'","\'",$comment);
    //die($com);

    if ($_POST['task'] == "add") {
//die('t');
        $req = "INSERT INTO comments(comment, user_id, video_id) VALUES('$com','$user','$video')";
        //die($req);
        mysqli_query($con, $req);

        header('Location:lecteur.php?id=' . $video);
        exit();
    }

    if ($_POST['task'] == "up") {
//die('u');
        $req = "UPDATE comments SET comment='$com' WHERE comment_id='$com_id'";
        //die($req);
        mysqli_query($con, $req);

        header('Location:lecteur.php?id='. $video);
        exit();
    }



}


if($_GET['task']=='delete' && isAdmin($user)){
    $id=$_GET['comm_id'];
    mysqli_query($con,"DELETE FROM comments WHERE comment_id='$id' LIMIT 1");
    header("Location:lecteur.php?id=$video_id");exit();
}else{
    $mess=2;
    echo $mess;
    //die($mess);
    header("Location:lecteur.php?id=$video_id&mess=$mess");exit();

}



/*if($_GET['task']=='update' && commentAuthor($user,$comm_id)){
    //die('toto');
    $id=$_GET['comm_id'];
    mysqli_query($con,"UPDATE comments SET comment=LIMIT 1");
    header("Location:lecteur.php?id=$video_id");exit();
}else{
    ;
    header("Location:lecteur.php?id=$video_id&mess=$mess");exit();

}*/


header("Location:lecteur.php?id=$video_id&mess=$mess");
