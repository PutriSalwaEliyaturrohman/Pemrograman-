<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
    $id_dokter = $_POST['id_dokter'];
    $nama = $_POST['nama'];
    $spesialis = $_POST['spesialis'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $model = new Model();
    $model->insert($id_dokter, $nama, $spesialis, $no_hp, $alamat);
    header('location:index.php');
}
if (isset($_POST['submit_edit'])){
    $id_dokter = $_POST['id_dokter'];
    $nama = $_POST['nama'];
    $spesialis = $_POST['spesialis'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $model = new Model();
    $model->update($id_dokter, $nama, $spesialis, $no_hp, $alamat);
    header('location:index.php');
}
if (isset($_GET['id_dokter'])) {
    $id = $_GET['id_dokter'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}