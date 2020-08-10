<?php
require_once 'menu.php';
global $con;

//die($_POST['comment']);
$comment=htmlspecialchars($_POST['comment']);
$user=$_SESSION['user_id'];
$video=htmlspecialchars($_POST['video']);

$req="INSERT INTO comments(comment, user_id, video_id) VALUES('$comment','$user','$video')";
mysqli_query( $con, $req);

header('Location:lecteur.php?id='.$video);
exit();
