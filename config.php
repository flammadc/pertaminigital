<?php

$server = "localhost";
$user = "root";
$pass = "addict0x021";
$database = "pertaminigital";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
