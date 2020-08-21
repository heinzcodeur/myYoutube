<?php

require_once 'menu.php';
require_once 'functions.php';
//die('non');

$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($_GET['task'] == 'delete') {
    $delreq="DELETE FROM videos WHERE video_id='$id' LIMIT 1";
    mysqli_query($con,$delreq);
    header('Location:dashboard.php');
    exit();
}


   // die('titi');
$message = isset($_GET['mess']) ? $_GET['mess'] : '';
$v = videos_search($id);
//print_r($v);die();
if ($_POST) {
    global $con;
    foreach ($_POST as $post => $value) {
        if ($value == '') {
            $mess = $post . ' est vide';
            header('Location:video_manager.php?mess=' . $mess);
            exit();
        }
    }

    $url = isset($_POST['url']) ? formatUrl($_POST['url']) : '';
    $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
    $url2=trim(str_replace("'","\'",$url));
    
    $req = "UPDATE videos SET url='$url2', titre='$titre' WHERE video_id='$id'";
//die($req);
    mysqli_query($con, $req);
    header('Location:dashboard.php');
    exit();
}

function urlvalue(array $v){
    $url=isset($v['url'])?$v['url']:null;
    return $url;
}

?>

<div class="container" style="width: 50%">

    <?php if ($message): ?>
        <div class="alert alert-danger"><?= $message ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <fieldset class="border p-4" style="border-radius: 5px">
            <legend class="w-auto">
                <h2 class="color">Mise à jour videos</h2>
            </legend>

            <div class="form-group">
                <label for="url" class="color">url</label>
                <input type='text' <?php if(urlvalue($v)):?>disabled<?php endif;?> class='form-control' id='url' name='url' value='<?= urlvalue($v) ?>'>
            </div>
            <div class="form-group">
                <label for="titre" class="color">titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="<?= $v['titre']?>">
            </div>

            <button type="submit" class="btn btn-primary">valider</button>
        </fieldset>
    </form>
</div>
