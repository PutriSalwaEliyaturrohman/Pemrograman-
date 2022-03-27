<!doctype html>
<html lang="en">

<head>
    <titel> Tambah Data Pasien </titel>
</head>

<body>
    <h1> Tambah </h1>
    <a href="index.php"> Kembali </a>
    <br></br>
    <form action="process.php" method="post">
        <label> Kode RM </label>
        <br>
        <input type="text" name="kode_rm">
        <br>
        <label> Nama </label>
        <br>
        <input type="text" name="nama">
        <br> 
        <label> Jenis Kelamin </label>
        <br>
        <input type="text" name="jeniskelamin">
        <br>  
        <label> Tempat Lahir </label>
        <br>
        <input type="text" name="tempatlahir">
        <br> 
        <label> Tanggal Lahir </label>
        <br>
        <input type="text" name="tanggallahir">
        <br>
        <label> Umur </label>
        <br>
        <input type ="text" name="umur">
        <br>
        <label> Alamat </label>
        <br>
        <input type ="text" name="alamat">
        <br>
        <label> Pengobatan </label>
        <br> 
        <input type="text" name="Pengobatan">
        <br><br>
        <button type="submit" name="submit_simpan"> Submit </button>
        <button type="reset"> Reset </button>
    </form>
</body>

</html>