<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
    $kode_rm = $_POST['kode_rm'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $pengobatan = $_POST['pengobatan'];
    $model = new Model();
    $model->insert($kode_rm, $nama, $jeniskelamin, $tempatlahir, $tanggallahir, $umur, $alamat, $pengobatan);
    header('location:index.php');
}
if (isset($_POST['submit_edit'])){
    $kode_rm = $_POST['kode_rm'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $pengobatan = $_POST['pengobatan'];
    $model = new Model();
    $model->update($kode_rm, $nama, $jeniskelamin, $tempatlahir, $tanggallahir, $umur, $alamat, $pengobatan);
    header('location:index.php');
}
if (isset($_GET['kode_rm'])) {
    $id = $_GET['kode_rm'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}