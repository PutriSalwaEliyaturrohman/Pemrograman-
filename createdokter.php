<!doctype html>
<html lang="en">

<head>
    <titel> Tambah Data Dokter </titel>
</head>

<body>
    <h1> Tambah </h1>
    <a href="index.php"> Kembali </a>
    <br></br>
    <form action="process.php" method="post">
        <label> Id Dokter </label>
        <br>
        <input type="text" name="id_dokter">
        <br>
        <label> Nama </label>
        <br>
        <input type="text" name="nama">
        <br> 
        <label> Spesialis </label>
        <br>
        <input type="text" name="spesialis">
        <br>  
        <label> No Handphone </label>
        <br>
        <input type="number" name="no_hp">
        <br> 
        <label> Alamat </label>
        <br>
        <input type="text" name="alamat">
        <br><br>
        <button type="submit" name="submit_simpan"> Submit </button>
        <button type="reset"> Reset </button>
    </form>
</body>

</html>