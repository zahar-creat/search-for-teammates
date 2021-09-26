<?php
$host = "localhost";
$root = "root";
$pass = "";
$db = "anyplay";
$mysql = mysqli_connect($host, $root, $pass, $db) or die(mysqli_connect_error());
mysqli_set_charset($mysql, 'UTF-8');