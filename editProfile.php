<?php
session_start();
require 'config.php';
$username = $_SESSION["username"];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["update"])) {
    $namaLengkap = $_POST['namaLengkap'];
    $username = $_POST['username'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $email = $_POST['email'];
    $password = $row["password"];
    $id = $row["id"];
    $sql = "UPDATE users SET namaLengkap='$namaLengkap', username='$username',tanggalLahir='$tanggalLahir', email='$email',password='$password' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    // if ($result) {
    header("Location: ./dashboard.php");
    echo "<script>alert('Updated!')</script>";
    // }
} else {
    echo "<script>alert('Password Tidak Sesuai')</script>";
}
