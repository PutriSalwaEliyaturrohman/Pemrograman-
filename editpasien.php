<?php
$id = $_GET ['kode_rm'];
include 'model.php';
$model = new Model ();
$data = $model ->edit($id);
?>

<!doctype html>
<html lang="en">

<head>
    <title> Edit Data Pasien </title>
</head>

<body>
    <h1> Edit Data Pasien </h1>
    <a href="index.php"> Kembali </a>
    <br><br>
    <form action="process.php" method="post">
        <label> Kode RM </label>
        <br>
        <input type="text" name="kode_rm" value="<?php echo $data->kode_rm ?>">
        <br>
        <label> Nama </label> 
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
        <label> Jenis Kelamin </label>
        <br>
        <input type="text" name="jeniskelamin" value="<?php echo $data->jeniskelamin ?>">
        <br>
        <label> Tempat Lahir </label>
        <br>
        <input type="text" name="tempatlahir" value="<?php echo $data->tempatlahir ?>">
        <br>
        <label> Tanggal Lahir </label>
        <br>
        <input type="text" name="tanggallahir" value="<?php echo $data->tanggallahir ?>">
        <br>
        <label> Umur </label>
        <br>
        <input type="text" name="umur" value="<?php echo $data->umur ?>">
        <br>
        <label> Alamat </label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br>
        <label> Pengobatan </label>
        <br>
        <input type="text" name="pengobatan" value="<?php echo $data->pengobatan ?>">
        <br><br>
        <button type="submit" name="submit_edit"> submit </button>
    </form>
</body>

</html>
