<?php
$host = "localhost";
$kullanici = "root";
$parola = "";
$db = "okul";

$connection = mysqli_connect($host, $kullanici, $parola, $db);
mysqli_set_charset($connection, "UTF8");