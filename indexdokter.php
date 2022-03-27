<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <tittle> Rekam Medis </title>
</head>

<body>
    <div>
        <h1> Data Dokter </h1>
        <a href="create.php"> Tambah Data </a>
        <br>
        <a href="print.php" target="_blank"> Cetak Data </a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th> Id Dokter </th>
                    <th> Nama </th>
                    <th> Spesialis </th>
                    <th> No Handphone </th>
                    <th> Alamat </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $result = $model->tampil_data();
                if (!empty ($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?=$index++ ?></td>
                            <td><?=$data->id_dokter ?></td>
                            <td><?=$data->nama ?></td>
                            <td><?=$data->spesialis ?></td>
                            <td><?=$data->no_hp ?></td>
                            <td><?=$data->alamat ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit.php?kode_rm=<?= $data->id_dokter ?> "> Edit </a>
                                <a name="hapus" id="hapus" href="process.php?kode_rm=<?= $data->id_dokter ?> "> Delete </a>
                            </td>
                        </tr>   
                    <?php endforeach;
                } else { ?>
                    <tr>
                        <td colspan="9"> Belum ada data dokter. </td>
                    </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</body>

</html>