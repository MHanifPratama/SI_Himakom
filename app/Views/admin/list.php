<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="width:100%">
<a href ="/tambah" type="button">Tambah</a>
  <tr>
    <th>id Anggota</th>
    <th>Nama Anggota</th>
    <th>NPM</th>
    <th>Bidang</th>
    <th>Prodi</th>
    <th>Status Jabatan</th>
    <th>Periode</th>
  </tr>
  <?php foreach ($Biodata as $Bio):?>
  <tr>
    <td><?= $Bio['id_anggota']?></td>
    <td><?= $Bio['nama_anggota']?></td>
    <td><?= $Bio['npm']?></td>
    <td><?= $Bio['nama_bidang']?></td>
    <td><?= $Bio['nama_prodi']?></td>
    <td><?= $Bio['nama_jabatan']?></td>
    <td><?= $Bio['periode']?></td>
    <td>
    <form action="/hapus/<?= $Bio['id_anggota'] ?>" method="post">
          <input type="hidden" name ="_method" value="DELETE" />
    <button type="submit" class="btn btn-danger"> Delete</button>
    </form>
    </td>
    <td>
    <a class="btn btn-warning mr-3" href="/edit/<?= $Bio['id_anggota']?>"></i> Edit</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>