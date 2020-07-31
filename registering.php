<?php

require_once 'db_connect.php';

if(!isset($_POST['register'])){
    header('Location:index.php');
}
print_r($_POST);//die();


$mail=isset($_POST['mail'])?$_POST['mail']:"";
$mdp=isset($_POST['mot2passe'])?$_POST['mot2passe']:"";
$nickname=isset($_POST['nickname'])?$_POST['nickname']:"";

$req="INSERT INTO users(nickname,email,mdp) VALUES('$nickname','$mail','$mdp')";
$id='';

$res=mysqli_query($con,$req);

$req2="SELECT * FROM users WHERE email='$mail'";
$res2=mysqli_query($con,$req2);

if(mysqli_num_rows($res2)==1){
    $val=mysqli_fetch_assoc($res2);
    $id=$val['user_id'];
}

session_start();

$_SESSION['nickname']=$nickname;
$_SESSION['user_id']=$id;

header('Location:index.php');
