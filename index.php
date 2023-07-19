<?php
include('components/navbar.php');
require 'config.php';

session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION['username'] = $row['username'];
            header("Location: ./dashboard.php");
            exit;
        } else {
            echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    } else {
        echo "<script>alert('error!')</script>";
    }
}
?>
<main class="container-md py-5" style="margin-top: 70px;">
    <nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-center gap-5">
        <img class="border" src="assets/img/person.png" style="width: 163px; height: 173px;" alt="">
        <form action="" class="d-flex flex-column gap-2 mb-3" method="POST">
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
                    <label for="password" class="col-form-label w-100">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" name="password" id="password" class="form-control w-100">
                </div>
            </div>

            <button name="login" type="submit" class="btn btn-primary ">Login</button>
        </form>
    </div>
</main>