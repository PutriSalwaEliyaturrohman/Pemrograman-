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
    <h1> Data Dokter </h1>
    <table>
        <thead>
            <tr>
                <th>Id Dokter</th>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>No Handphone</th>
                <th>Alamat</th>
            </tr>
        </thead?>
        <tbody>
            <?php
             $result = $model->tampil_data();
             if (!empty($result)) {
                 foreach ($result as $data) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $data->id_dokter ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->spesialis?></td>
                        <td><?= $data->no_hp ?></td>
                        <td><?= $data->alamat ?></td>
                    </tr>
            <?php endforeach;
        } else { ?> 
            <tr>
                <td colspan="9">Belum ada data dokter.</td>
            </tr>    
        <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>