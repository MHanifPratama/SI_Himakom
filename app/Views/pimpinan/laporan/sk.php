<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $tmp = 0;
		$x = 0;
        ?>
    <h4>Surat Keputusan</h4>
    <h4>Nama Kegiatan         : <?=$kegiatan?></h4>
    <h4>Ketua Pelaksana      : <?=$ketua_pelaksana?></h4>
    <h4>Sekretaris Pelaksana : <?=$sekretaris_pelaksana?></h4>
    <h4>Bendahara Pelaksana  : <?=$bendahara_pelaksana?></h4>
    <?php foreach($division as $div):?>
    <table>
        
        <h4>Divisi : <?=$div?></h4>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
            </tr>
            <tr>
                <td><?=$koor[$tmp]?></td>
                <td>Koordinator</td>
            </tr>
            <tr>
                <td><?=$sekoor[$tmp]?></td>
                <td>Sekretaris Koordinator</td>
            </tr>
            <?php for ($x ; $x < count($anggota); $x++):?>
                <?php if ($anggota[$x] == 'anggota'):?>
                    <?php $x++;?>
                    <?php break;?>
                <?php else:?>
                    <tr>
                        <td><?=$anggota[$x]?></td>
                        <td>Anggota</td>
                    </tr>
                <?php endif;?>
            <?php endfor;?>
            
    </table>
<?php $tmp++;?>
<?php endforeach;?>
</body>
</html>