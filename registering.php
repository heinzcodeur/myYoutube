<?php

require_once 'db_connect.php';

if(!isset($_POST['register'])){
    header('Location:index.php');
}
print_r($_POST);//die();


$mail=isset($_POST['mail'])?$_POST['mail']:"";
$mdp=isset($_POST['mot2passe'])?$_POST['mot2passe']:"";
$nickname=isset($_POST['nickname'])?$_POST['nickname']:"";

$req="INSERT INTO test(nickname,email,mdp) VALUES('$nickname','$mail','$mdp')";

$res=mysqli_query($con,$req);

session_start();

$_SESSION['nickname']=$nickname;

header('Location:index.php');
