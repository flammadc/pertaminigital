<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
include('components/navbar.php');
?>

<main class="container-md py-5" style="margin-top: 70px;">
    <div class="d-flex flex-column justify-content-between align-items-center border border-black rounded p-3 mb-3">
        <h4 class="d-flex align-self-start">Profil Pengguna</h4>
        <img src="assets/img/person.png" class="rounded-circle border mb-2" style="width: 100px;" alt="...">
        <h5 class="mb-3">User</h5>

        <form method="post" action="" class="d-flex flex-column gap-2 mb-3">
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="nama" class="col-form-label w-100">Nama Lengkap</label>
                </div>
                <div class="col-auto">
                    <input type="text" value="User Lengkap" id="nama" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="username" class="col-form-label w-100">Username</label>
                </div>
                <div class="col-auto">
                    <input type="text" value="User" id="username" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="tanggalLahir" class="col-form-label w-100">Tanggal Lahir</label>
                </div>
                <div class="col-auto">
                    <input type="date" value="User" id="tanggalLahir" class="form-control w-100">
                </div>
            </div>
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="email" class="col-form-label w-100">Email</label>
                </div>
                <div class="col-auto">
                    <input type="email" value="user@gmail.com" id="email" class="form-control w-100">
                </div>
            </div>
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="password" class="col-form-label w-100">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" value="User" id="password" class="form-control w-100">
                </div>
            </div>
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="cpassword" class="col-form-label w-100">Confirm Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" value="User" id="cpassword" class="form-control w-100">
                </div>
            </div>

            <button type="submit" class="btn btn-warning">Edit Data</button>
        </form>

    </div>

</main>