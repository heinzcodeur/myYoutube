<?php
require_once('menu.php');

unset($_SESSION['nickname']);
unset($_SESSION['user_id']);

header('Location:index.php');
