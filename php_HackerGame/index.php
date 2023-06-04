<?php

require 'config.php';
require 'Session.class.php';

if(isset($_COOKIE['PHPSESSID'])){
    $session = new Session();
}

if(isset($_SESSION))
    require_once 'templates/game.php';
else
    require_once 'templates/home.php';
?>
