<?php
require_once 'db_connect.php';

if(!isset($_POST['connexion'])){
    header('Location:index.php');
}

//die('cc');
$mail=isset($_POST['mail'])?$_POST['mail']:"";
$mdp=isset($_POST['mot2passe'])?$_POST['mot2passe']:"";
//$age=isset($_POST['age'])?$_POST['age']:"";

$req="SELECT * FROM users WHERE email='$mail' and mdp='$mdp'";
$res=mysqli_query($con,$req);

if(mysqli_num_rows($res)==1){
    while ($a=mysqli_fetch_assoc($res)){
            $nickname2=$a['nickname'];
            $mail2=$a['email'];
    }


    session_start();
    $_SESSION['nickname']=$nickname2;

    header('Location:index.php');
    exit();
}
//die();
header('Location:connexion.php');
exit();