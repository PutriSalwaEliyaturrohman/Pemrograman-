<?php
include 'conection.php'; 
class Model extends Conection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($id_dokter, $nama, $spesialis, $no_hp, $alamat)
{
    $sql = "INSERT INTO tbl_dokter (id_dokter, nama, spesialis, no_hp, alamat); VALUES ('$id_dokter', '$nama', '$spesialis', '$no_hp', '$alamat')";
    $this->conn->query($sql);
}
public function tampil_data()
{
$sql = "SELECT * FROM tbl_dokter";

$bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM tbl_dokter WHERE id_dokter='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($id_dokter, $nama, $spesialis, $no_hp, $alamat)
    {




    $sql = "UPDATE tbl_dokter SET id_dokter='$id_dokter', nama='$nama', spesialis='$spesialis', no_hp='$no_hp', alamat='$alamat'";
    $this->conn->query($sql);
    }
    public function delete($id_dokter)
    {
   
    $sql = "DELETE FROM tbl_dokter WHERE id_dokter='$id_dokter'";
    $this->conn->query($sql);
    }
    }