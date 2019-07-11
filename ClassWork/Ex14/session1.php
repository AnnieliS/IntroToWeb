<?php

session_start();

$_SESSION["usr"] = 'Annie';
echo 'session is ' . $_SESSION["usr"] ;

?>