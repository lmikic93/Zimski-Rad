<?php

if(!isset($_GET["email"]) || !isset($_GET["password"])){
    header("location: login.php?g=1");
    exit;
}

if($_GET["email"]==="" || $_GET["password"]===""){
    header("location: login.php?g=2");
    exit;
}

if($_GET["email"]==="edunova@edunova.hr" && $_GET["password"]==="e"){
    include_once "konfiguracija.php";
    $_SESSION["user"]=$_GET["email"];
    header("location: zasticena.php");
    exit;
}else{
    header("location: login.php?g=3");
}


