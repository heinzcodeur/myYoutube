<?php

require_once 'db_connect.php';

if(!isset($_POST['connexion'])){
    header('Location:index.php');
}

die('cc');
$mail=isset($_POST['mail'])?$_POST['mail']:"";
$mdp=isset($_POST['mot2passe'])?$_POST['mot2passe']:"";
$age=isset($_POST['age'])?$_POST['age']:"";
//echo '<pre>';print_r($_POST);echo '<pre>';//die();


$req="INSERT INTO test(mail,mdp,age) VALUES('$mail', '$mdp', $age)";

//die($req);

$req2="SELECT * FROM test";

$res=mysqli_query($con,$req);
$res2=mysqli_query($con,$req2);

//print_r($res2);die();

while ($a=mysqli_fetch_assoc($res2)){
 echo '<pre>';print_r( $a);echo '<pre>';
}
die();
header('Location:index.php');
exit();