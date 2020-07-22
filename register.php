<?php
require_once 'menu.php';

?>


<div class="container mt-4" style="width:50%">

    <form method="post" action="registering.php">
        <fieldset class="border p-4">
            <legend class="w-auto">
                <h2>Inscription</h2>
            </legend>

            <div class="form-group">
                <label for="nickname">pseudo</label>
                <input type="text" class="form-control" id="nickname" name="nickname">
            </div>

            <div class="form-group">
                <label for="mail">adresse mail</label>
                <input type="email" class="form-control" id="mail" name="mail"
                       aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="mot2passe">mot2passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="mot2passe">
            </div>
            <input type="hidden" name="register">

            <button type="submit" class="btn btn-primary">valider</button>
        </fieldset>
    </form>



</div>