<?php
include 'conection.php'; 
class Model extends Conection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($kode_rm, $nama, $jeniskelamin, $tempatlahir, $tanggallahir, $umur, $alamat, $pengobatan)
{
    $sql = "INSERT INTO tbl_datapasien (kode_rm, nama, jeniskelamin, tempatlahir, tanggallahir, umur, alamat, pengobatan); 
    VALUES ('$kode_rm', '$nama', '$jeniskelamin', '$tempatlahir', '$tanggallahir', '$umur', '$alamat', '$pengobatan')";
    $this->conn->query($sql);
}
public function tampil_data()
{
$sql = "SELECT * FROM tbl_datapasien";

$bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM tbl_datapasien WHERE kode_rm='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($kode_rm, $nama, $jeniskelamin, $tempatlahir, $tanggallahir, $umur, $alamat, $pengobatan)
    {




    $sql = "UPDATE tbl_datapasien SET kode_rm='$kode_rm', nama='$nama', jeniskelamin='$jeniskelamin', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', umur='$umur', alamat='$alamat',pengobatan='$pengobatan'  WHERE kode_rm='$kode_rm'";
    $this->conn->query($sql);
    }
    public function delete($kode_rm)
    {
   
    $sql = "DELETE FROM tbl_datapasien WHERE kode_mr='$kode_mr'";
    $this->conn->query($sql);
    }
    }