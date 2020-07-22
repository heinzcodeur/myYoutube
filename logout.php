<?php
require_once('menu.php');

unset($_SESSION['nickname']);

header('Location:index.php');
