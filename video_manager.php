<?php

require_once 'menu.php';

$message = isset($_GET['mess']) ? $_GET['mess'] : '';
if ($_POST) {
    //die('no');
    foreach ($_POST as $post => $value) {
        if ($value == '') {
            $mess = $post . ' est vide';
            header('Location:video_manager.php?mess=' . $mess);
            exit();
        }
    }

$url=$_POST['url'];
$titre=$_POST['titre'];
$id=$_GET['id'];


$req="UPDATE videos SET url='$url',titre='$titre' WHERE video_id='$id' LIMIT 1";
//die($req);
mysqli_query($con,$req);
header('Location:dashboard.php');exit();
}
?>

<div class="container" style="width: 50%">

    <?php if($message):?>
        <div class="alert alert-danger"><?=$message?></div>
    <?php endif;?>

<form method="post" action="">
    <fieldset class="border p-4" style="border-radius: 5px">
        <legend class="w-auto">
            <h2 class="color">Mise à jour videos</h2>
        </legend>

        <div class="form-group">
            <label for="url" class="color">url</label>
            <input type="text" class="form-control" id="url" name="url">
        </div>
        <div class="form-group">
            <label for="titre" class="color">titre</label>
            <input type="text" class="form-control" id="titre" name="titre">
        </div>

        <button type="submit" class="btn btn-primary">valider</button>
    </fieldset>
</form>
</div>
