<?php
include('components/navbar.php');

?>

<main class="container-md py-5" style="margin-top: 70px;">
    <div class="d-flex justify-content-around mb-3">
        <div class="d-flex flex-column gap-4">
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="bahanBakar" class="col-form-label w-100">Jenis Bahan Bakar</label>
                </div>
                <div class="col-auto w-50">
                    <select id="bahanBakar" class="form-select w-100">
                        <option selected>Bahan Bakar</option>
                        <option value="1">Pertalite</option>
                        <option value="2">Pertamax</option>
                        <option value="3">Pertamax Turbo</option>
                        <option value="4">Bio Solar</option>
                        <option value="5">Dexlite</option>
                    </select>
                </div>
            </div>

            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="jumlahUang" class="col-form-label w-100">Jumlah Uang (Rp)</label>
                </div>
                <div class="col-auto">
                    <input type="number" value="0" id="jumlahUang" class="form-control">
                </div>
            </div>
        </div>
        <div class="d-flex flex-column gap-4">
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="harga" class="col-form-label w-100">Harga Perliter</label>
                </div>
                <div class="col-auto">
                    <input type="number" value="0" id="harga" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <label for="jumlahLiter" class="col-form-label w-100">Jumlah Liter</label>
                </div>
                <div class="col-auto">
                    <input type="number" id="jumlahLiter" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex gap-3 justify-content-center mb-3">
        <button type="button" class="btn btn-success">Order</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
    </div>
    <div class="">
        <h5 class="mb-2">Riwayat Pembelian</h5>
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