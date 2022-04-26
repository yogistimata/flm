<?php
require "function.php";

if (isset($_POST["submit"])) {
 if (tambah($_POST)> 0){
     echo "Data berhasil";
 }else {
     echo "Data gagal";
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Filem</h1>
    <form action="" mthod="POST">
        <ul>
            <label for="gambar">GAMBAR :</label>
            <input type="text" name="gambar" id="gambar">
        </ul>
        <ul>
            <label for="tanggal rilis">TANGGAL RILIS :</label>
            <input type="text" name="tanggal rilis" id="tanggal rilis">
        </ul>
        <ul>
            <label for="sutradara">SUTRADARA :</label>
            <input type="text" name="sutradra" id="sutradara">
        </ul>
        <ul>
            <label for="skuel">SKUEL :</label>
            <input type="text" name="skuel" id="skuel">
        </ul>  <ul>
            <label for="diadaptasi dari">DIADAPTASI DARI :</label>
            <input type="text" name="diadaptasi dari" id="diadaptasi dari">
        </ul>  <ul>
            <label for="bahasa">BAHASA :</label>
            <input type="text" name="bahasa" id="bahasa">
        </ul>
        <ul>
            <label for="ket">KET :</label>
            <input type="text" name="ket" id="ket">
        </ul>
        <br>
        <br>
        <li>
            <button type="submit" name="submit">Tambahkan</button>
        </li>

    </form>
    
</body>
</html>