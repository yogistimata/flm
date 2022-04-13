<?php
$koneck = mysqli_connect ("localhost", "root", "", "filem");
$result = mysqli_query ($koneksi, "select * from data_flm");
var_dump("$result");
$flm = mysqli_fetch_row($result);
var_dump($flm)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMIN</title>
</head>
<body>
    <h1>FILEM YANG AKAN TAYANG</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO.</th>
            <th>AKSI</th>
            <th>Gambar</th>
            <th>Tanggal rilis</th>
            <th>Sutradara</th>
            <th>Skuel</th>
            <th>Diadaptasi dari</th>
            <th>Bahasa</th>
            <th>Ket</th>
        </tr>
        <tr>
            <td>1.</td>
            <td><a href="">ubah</a> |
            <a href="">hapus</a>
            </td>
            <td><img src="Img/Transformers.jpg" width="50" >
            </td>
            <td>28 Juni 2007 (Indonesia)</td>
            <td>Roberto Orci , Alex Kurtzman , John Rogers</td>
            <td>Transformers Revenge of the Fallen</td>
            <td>Transformers</td>
            <td>Inggris</td>
            <td>Transformers adalah film fiksi ilmiah Amerika yang diangkat dari kisah Transformers tahun 1984. Film ini memadukan CGI dengan laga hidup.</td>

        </tr>

    </table>
</body>
</html>