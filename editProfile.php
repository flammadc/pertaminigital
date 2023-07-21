<?php
session_start();
require 'config.php';
$namaLengkap = $_POST['namaLengkap'];
$username = $_POST['username'];
$tanggalLahir = $_POST['tanggalLahir'];
$email = $_POST['email'];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$id = $_POST["id"];

if ($password == $cpassword) {
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $sql = "UPDATE users SET namaLengkap='$namaLengkap', username='$username',tanggalLahir='$tanggalLahir', email='$email',password='$password' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    // if ($result) {
    //     header("Location: ./dashboard.php");
    echo "<script>alert('Updated!')</script>";
    // }
} else {
    echo "<script>alert('Password Tidak Sesuai')</script>";
}
