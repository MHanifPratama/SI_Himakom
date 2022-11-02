<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if($hasil!=null): ?>
<?php foreach ($hasil as $hasil): ?>
<table> 
    <thead>
        <tr>
        <th>Nama Anggota</th>
        <th>NPM</th>
        <th>Nama Bidang</th>
        <th>Prodi</th>
        <th>Periode</th>
        </tr>
        <tr>
            
            <td><?=$hasil['nama_anggota']?></td>
            <td><?=$hasil['npm']?></td>
            <td><?=$hasil['nama_bidang']?></td>
            <td><?=$hasil['nama_prodi']?></td>
            <td><?=$hasil['periode']?></td>
        
        </tr>
    </thead>
</table>
<?php endforeach;?>
<?php else: ?>
    <h1>Maaf Data Tidak Ditemukan</h1>
<?php endif;?>
</body>
</html>