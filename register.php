<?php
include('components/navbar.php');
include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: ./dashboard.php");
}

if (isset($_POST['register'])) {
    $namaLengkap = $_POST['namaLengkap'];
    $username = $_POST['username'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $email = $_POST['email'];
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["cpassword"]);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows === 0) {
            $sql = "INSERT INTO users (namaLengkap, username, tanggalLahir, email, password)
                    VALUES ('$namaLengkap', '$username', '$tanggalLahir', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: ./dashboard.php");
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Username Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>
<main class="container-md py-5" style="margin-top: 70px;">
    <nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-center gap-5">
        <img class="border" src="assets/img/person.png" style="width: 163px; height: 173px;" alt="">
        <form method="post" action="" class="d-flex flex-column gap-2 mb-3">
            <div class="d-flex gap-5 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="namaLengkap" class="col-form-label w-100">Nama Lengkap</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="namaLengkap" id="namaLengkap" class="form-control">
                </div>
            </div>
            <div class="d-flex gap-5 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="username" class="col-form-label w-100">Username</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="username" id="username" class="form-control">
                </div>
            </div>
            <div class="d-flex gap-5 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="tanggalLahir" class="col-form-label w-100">Tanggal Lahir</label>
                </div>
                <div class="col-auto">
                    <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control w-100">
                </div>
            </div>
            <div class="d-flex gap-5 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="email" class="col-form-label w-100">Email</label>
                </div>
                <div class="col-auto">
                    <input type="email" name="email" id="email" class="form-control w-100">
                </div>
            </div>
            <div class="d-flex gap-5 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="password" class="col-form-label w-100">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" name="password" id="password" class="form-control w-100">
                </div>
            </div>
            <div class="d-flex gap-5 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="cpassword" class="col-form-label w-100">Confirm Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" name="cpassword" id="cpassword" class="form-control w-100">
                </div>
            </div>

            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </form>
    </div>
</main>