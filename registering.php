<?php

require_once 'db_connect.php';
require_once 'functions.php';

//print_r($_POST);die('ryh');


if(!isset($_POST['register'])){
    die('o');
    header('Location:index.php');
}
//print_r($_POST);//die();

function formatdatas(array $post){
    //global $con;
    foreach ($post as $item=>$v) {
        if($item==='mail'){

            existmail($v);
        }
        if(empty($v='')){
            header('Location:register.php?error=1');exit();
        }
        //die('non');
    }
    //echo '<pre>';print_r($post);echo '</pre>';die();
    //return $keys;
}

formatdatas($_POST);
//die('yy');

$mail=isset($_POST['mail'])?mysqli_real_escape_string($con,htmlspecialchars($_POST['mail'])):"";
$mdp=isset($_POST['mot2passe'])?mysqli_real_escape_string($con,htmlspecialchars($_POST['mot2passe'])):"";
$nickname=isset($_POST['nickname'])?mysqli_real_escape_string($con,htmlspecialchars($_POST['nickname'])):"";

die($nickname);
$req="INSERT INTO users(nickname,email,mdp) VALUES('$nickname','$mail','$mdp')";
$id='';

$res=execute();

$req2="SELECT * FROM users WHERE email='$mail'";
$req2="SELECT * FROM users WHERE email='$mail'";
$res2=execute(mySelect('users','email','=',$mail));

if(mysqli_num_rows($res2)==1){
    $val=mysqli_fetch_assoc($res2);
    $id=$val['user_id'];
}

session_start();

$_SESSION['nickname']=$nickname;
$_SESSION['user_id']=$id;

header('Location:index.php');
