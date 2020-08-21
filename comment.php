<?php
require_once 'menu.php';
require_once 'functions.php';
global $con;

$user=$_SESSION['user_id'];
$video_id=$_GET['video_id'];

if($_POST){

$comment=htmlspecialchars($_POST['comment']);
$video=htmlspecialchars($_POST['video']);

$req="INSERT INTO comments(comment, user_id, video_id) VALUES('$comment','$user','$video')";
mysqli_query( $con, $req);

header('Location:lecteur.php?id='.$video);
exit();
}


if($_GET['task']=='delete' && isAdmin($user)){
    $id=$_GET['comm_id'];
    mysqli_query($con,"DELETE FROM comments WHERE comment_id='$id' LIMIT 1");
    header("Location:lecteur.php?id=$video_id");exit();
}

header("Location:lecteur.php?id=$video_id&mess=2");
