<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cetak Data</title>
    <style>
        h1 {
            text-align: center:
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>
    <h1>Laporan Data Pasien </h1>
    <table>
        <thead>
            <tr>
                <th>Kode RM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Pengobatan</th>
            </tr>
        </thead?>
        <tbody>
            <?php
             $result = $model->tampil_data();
             if (!empty($result)) {
                 foreach ($result as $data) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $data->kode_rm ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->jeniskelamin ?></td>
                        <td><?= $data->tempatlahir ?></td>
                        <td><?= $data->tanggallahir ?></td>
                        <td><?= $data->umur ?></td>
                        <td><?= $data->alamat ?></td>
                        <td><?= $data->pengobatan ?></td>
                    </tr>
            <?php endforeach;
        } else { ?> 
            <tr>
                <td colspan="9">Belum ada data pasien.</td>
            </tr>    
        <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>