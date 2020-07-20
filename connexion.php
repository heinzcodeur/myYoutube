<?php
require_once 'menu.php';

?>


<div class="container mt-4" style="width:50%">

<form method="post" action="login.php">
<fieldset class="border p-4">
<legend class="w-auto">
<h2>Connexion</h2>
</legend>
  <div class="form-group">
    <label for="mail">adresse mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="mot2passe">mot2passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="mot2passe">
  </div>
  <!--div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div-->
  <button type="submit" class="btn btn-primary">valider</button>
</form>
</fieldset>

<br>
<a href="#"><i>Pas encore inscrit? Cliquez pour vour vous inscrire</i></a>





</div>