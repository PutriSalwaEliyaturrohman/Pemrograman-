<?php
$id = $_GET ['id_dokter'];
include 'model.php';
$model = new Model ();
$data = $model ->edit($id);
?>

<!doctype html>
<html lang="en">

<head>
    <title> Edit Data Dokter </title>
</head>

<body>
    <h1> Edit Data Dokter </h1>
    <a href="index.php"> Kembali </a>
    <br><br>
    <form action="process.php" method="post">
        <label> Id Dokter </label>
        <br>
        <input type="text" name="id_dokter" value="<?php echo $data->id_dokter ?>">
        <br>
        <label> Nama </label> 
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
        <label> Spesialis </label>
        <br>
        <input type="text" name="spesialis" value="<?php echo $data->spesialis ?>">
        <br>
        <label> No Handphone  </label>
        <br>
        <input type="number" name="no_hp" value="<?php echo $data->no_hp ?>">
        <br>
        <label> Alamat </label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br><br>
        <button type="submit" name="submit_edit"> submit </button>
    </form>
</body>

</html>
