<?php
require_once 'db_connect.php';
require_once 'menu.php';

?>

<div class="container mt-4" style="width:50%">

    <form method="post" action="videos_register.php">
        <fieldset class="border p-4">
            <legend class="w-auto">
                <h2 class="color">Ajouter une video</h2>
            </legend>

            <div class="form-group">
                <label for="url" class="color">url de la video</label>
                <input type="text" class="form-control" id="url" name="url">
            </div>
            <div class="form-group">
                <label for="title" class="color">titre</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <button type="submit" class="btn btn-primary">valider</button>
        </fieldset>
    </form>

    <br>


</div>
