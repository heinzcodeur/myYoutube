<?php
require_once 'db_connect.php';
require_once 'menu.php';
//echo '<pre>';var_dump($_POST);echo '</pre>';
//print_r($_SESSION);die();

$url=isset($_POST['url'])?$_POST['url']:"";
$titre=isset($_POST['title'])?$_POST['title']:"";

/*echo strlen(trim($url)).'<br>';
echo strlen($url).'<br>';*/
$url2=trim($url);
$titre2=($titre);
//echo htmlentities($url);
$user=$_SESSION['user_id'];

$req="INSERT INTO videos(url,titre,date_ajout,author) VALUES ('$url2','$titre2', NOW(),$user)";
//die($req);
$res=mysqli_query($con,$req);

header('Location:index.php');
