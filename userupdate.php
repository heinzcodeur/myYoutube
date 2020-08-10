<?php

require_once 'menu.php';

$message=isset($_GET['mess'])?$_GET['mess']:'';
if ($_POST) {
//print_r($_POST);die();
    foreach ($_POST as $post=>$value) {
        if ($value=='') {
//print_r('error');die();
            $mess = $post . ' est vide';
            header('Location:userupdate.php?mess=' . $mess);
            exit();
        }
        //die('ici');
    }
//die('bibi');
    $nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : '';


    $user_id = $_SESSION['user_id'];
//$field=key($_POST);*/

    $req = "UPDATE users SET nickname='$nickname', email='$email', mdp='$mdp' WHERE user_id='$user_id'";
    mysqli_query($con, $req);

    $_SESSION['nickname']=$nickname;

    header('Location:dashboard.php');
//die($req);
}
?>

<div class="container" style="width:50%">

    <?php if($message):?>
    <div class="alert alert-danger"><?=$message?></div>
    <?php endif;?>

<form method="post" action="">
    <fieldset class="border p-4">
        <legend class="w-auto">
            <h2 class="color">Mise à jour Infos</h2>
        </legend>

        <div class="form-group">
            <label for="nickname" class="color">pseudo</label>
            <input type="text" class="form-control" id="nickname" name="nickname">
        </div>
        <div class="form-group">
            <label for="email" class="color">adresse mail</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="mdp" class="color">mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>

        <button type="submit" class="btn btn-primary">valider</button>
    </fieldset>
</form>


</div>
