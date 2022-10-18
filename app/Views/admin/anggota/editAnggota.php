<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/update/<?=$Biodata['id_anggota']?>" method="post">
            <label for="nama_anggota">Nama Anggota</label>
            <input type="text" name = "nama_anggota" id="nama_anggota" value="<?=$Biodata['nama_anggota']?>">
            <label for="npm">NPM</label>
            <input type="text" name = "npm" id="npm" value="<?=$Biodata['npm']?>">
            <label for="bidang">Bidang</label>
            <select type="text" name = "bidang" id="bidang">
                <?php foreach ($Bidang as $bidang):?>
                    <?php if ($bidang['id_bidang'] == $Biodata['id_bidang']):?>
                        <option selected value="<?=$bidang['id_bidang']?>"><?=$bidang['nama_bidang']?></option>
                    <?php else:?>
                        <option value="<?=$bidang['id_bidang']?>"><?=$bidang['nama_bidang']?></option>
                    <?php endif?>
                <?php endforeach; ?>
            </select>
            <label for="prodi">Prodi</label>
            <select type="text" name = "prodi" id="prodi">
                <?php foreach ($Prodi as $prodi):?>
                    <?php if ($prodi['id_prodi'] == $Biodata['id_prodi']):?>
                        <option selected value="<?=$prodi['id_prodi']?>"><?=$prodi['nama_prodi']?></option>
                    <?php else:?>
                        <option value="<?=$prodi['id_prodi']?>"><?=$prodi['nama_prodi']?></option>
                    <?php endif?>
                <?php endforeach; ?>
            </select>
            <label for="status_jabatan">Status Jabatan</label>
            <select type="text" name = "status_jabatan" id="status_jabatan">
                <?php foreach ($Jabatan as $jabatan):?>
                    <?php if ($jabatan['id_jabatan'] == $Biodata['id_jabatan']):?>
                        <option selected value="<?=$jabatan['id_jabatan']?>"><?=$jabatan['nama_jabatan']?></option>
                    <?php else:?>
                        <option value="<?=$jabatan['id_jabatan']?>"><?=$jabatan['nama_jabatan']?></option>
                    <?php endif?>
                <?php endforeach; ?>
            </select>
            <label for="periode">Periode</label>
            <input type="text" name = "periode" id="periode" value="<?=$Biodata['periode']?>">
            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
    </form>
</body>
</html>