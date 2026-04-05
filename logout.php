<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('Location:../login/'); die();
    } //If the user isn’t logged in, sends them back to the login page and stops everything else.