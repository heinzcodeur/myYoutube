<?php
require_once 'db_connect.php';

global $con;

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

    $id=$_POST['id'];
    //$a=mysqli_fetch_assoc($res);
    //print_r($a['user_id']);die();
    while ($a=mysqli_fetch_assoc($res)){
            $nickname2=$a['nickname'];
            $mail2=$a['email'];
            $user_id=$a['user_id'];
    }


    session_start();
    $_SESSION['nickname']=$nickname2;
    $_SESSION['user_id']=$user_id;

//    if($_POST['page']){
//
//    header('Location:lecteur.php?id='.$id);
//    exit();
//    }

    header('Location:index.php');
    exit();
}
//die();
header('Location:connexion.php');
exit();
