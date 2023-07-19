<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
include('components/navbar.php');
?>

<main class="container-md py-5" style="margin-top: 70px;">
    <a href="./logout.php">logout</a>
    <div class="d-flex flex-column justify-content-between align-items-center border border-black rounded p-3 mb-3">
        <h4 class="d-flex align-self-start">Profil Pengguna</h4>
        <img src="assets/img/person.png" class="rounded-circle border mb-2" style="width: 100px;" alt="...">
        <h5>User</h5>

    </div>
    <div class="border border-black rounded p-3 mb-3">
        <h4>Riwayat Pembelian</h4>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jenis Bahan Bakar</th>
                    <th scope="col">Jumlah Uang (Rp)</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>19 Juli 2023</td>
                    <td>Pertamax</td>
                    <td>200000</td>
                    <td>10</td>
                </tr>

            </tbody>
        </table>
    </div>

</main>