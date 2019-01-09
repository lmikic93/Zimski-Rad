<?php

include_once "konfiguracija.php" ;
unset($_SESSION["user"]);
session_destroy();
header("location: login.php?g=5");


