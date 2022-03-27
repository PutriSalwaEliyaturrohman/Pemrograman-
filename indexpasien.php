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
        <h1> Data Pasien </h1>
        <a href="create.php"> Tambah Data </a>
        <br>
        <a href="print.php" target="_blank"> Cetak Data </a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th> Kode RM </th>
                    <th> Nama </th>
                    <th> Jenis Kelamin </th>
                    <th> Tempat Lahir </th>
                    <th> Tanggal Lahir </th>
                    <th> Umur </th>
                    <th> Alamat </th>
                    <th> Pengobatan </th>
                    <th> Aksi </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $result = $model->tampil_data();
                if (!empty ($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?=$index++ ?></td>
                            <td><?=$data->kode_rm ?></td>
                            <td><?=$data->nama ?></td>
                            <td><?=$data->jeniskelamin ?></td>
                            <td><?=$data->tempatlahir ?></td>
                            <td><?=$data->tanggallahir ?></td>
                            <td><?=$data->umur ?></td>
                            <td><?=$data->alamat ?></td>
                            <td><?=$data->pengobatan ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit.php?kode_rm=<?= $data->kode_rm ?> "> Edit </a>
                                <a name="hapus" id="hapus" href="process.php?kode_rm=<?= $data->kode_rm ?> "> Delete </a>
                            </td>
                        </tr>   
                    <?php endforeach;
                } else { ?>
                    <tr>
                        <td colspan="9"> Belum ada data pasien. </td>
                    </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</body>

</html>