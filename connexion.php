<?php
require_once 'menu.php';
$id=isset($_GET['id'] )?$_GET['id'] :'';

?>


<div class="container mt-4" style="width:50%">

    <form method="post" action="login.php">
        <fieldset class="border p-4">
            <legend class="w-auto">
                <h2>Connexion</h2>
            </legend>

            <div class="form-group">
                <label for="mail">adresse mail</label>
                <input type="email" class="form-control" id="mail" name="mail"
                       aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="mot2passe">mot2passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="mot2passe">
                <input type="hidden" name="page" value="<?=$_GET['page']?>">
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
            </div>
            <input type="hidden" name="connexion">


            <button type="submit" class="btn btn-primary">valider</button>
        </fieldset>
    </form>

    <br>
    <a href="register.php?page=lecteur&id=<?= $id?>">
        <i>Pas encore inscrit? Cliquez pour vour vous inscrire!</i>
    </a>


</div>
