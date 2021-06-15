<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();


// tabel member
 }
 public function insert_member($id_member, $nama_member, $no_tlp, $alamat)
{
	$sql = "INSERT INTO tbl_member (id_member, nama_member, no_tlp, alamat) 
	VALUES ('$id_member', '$nama_member', '$no_tlp', '$alamat')";
	$this->conn->query($sql);
}
public function tampil_data_member()
{
	 $sql = "SELECT * FROM tbl_member";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
	 	return $baris;
	 }
}
public function edit_member($id)
{
	 $sql = "SELECT * FROM tbl_member WHERE id_member='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
		 $baris = $obj;
	 }
	 return $baris;
}
public function update_member($id_member, $nama_member, $no_tlp, $alamat)
{
	 $sql = "UPDATE tbl_member SET nama_member='$nama_member', no_tlp='$no_tlp', alamat='$alamat' WHERE id_member='$id_member'";
	 $this->conn->query($sql);
}
public function delete_member($member_id)
{ 
	$sql = "DELETE FROM tbl_member WHERE id_member='$member_id'";
	$this->conn->query($sql);
}

// tabel keaktifan
 public function insert_keaktifan($id_aktif, $nama_member, $tgl_masuk, $tgl_keluar, $masa_aktif)
{
  $sql = "INSERT INTO tbl_keaktifan (id_aktif, nama_member, tgl_masuk, tgl_keluar, masa_aktif) 
  VALUES ('$id_aktif', '$nama_member', '$tgl_masuk', '$tgl_keluar', '$masa_aktif')";
  $this->conn->query($sql);
}
public function tampil_data_keaktifan()
{
   $sql = "SELECT * FROM tbl_keaktifan";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) { 
    $baris[] = $obj;
   }
   if(!empty($baris)){
    return $baris;
   }
}
public function edit_keaktifan($id)
{
   $sql = "SELECT * FROM tbl_keaktifan WHERE id_aktif='$id'";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) {
     $baris = $obj;
   }
   return $baris;
}
public function update_keaktifan($id_aktif, $nama_member, $tgl_masuk, $tgl_keluar, $masa_aktif)
{
   $sql = "UPDATE tbl_keaktifan SET nama_member='$nama_member', tgl_masuk='$tgl_masuk', tgl_keluar='$tgl_keluar', masa_aktif='$masa_aktif' WHERE id_aktif='$id_aktif'";
   $this->conn->query($sql);
}
public function delete_keaktifan($aktif_id)
{ 
  $sql = "DELETE FROM tbl_keaktifan WHERE id_aktif='$aktif_id'";
  $this->conn->query($sql);
}

// tabel keaktifan
public function tampil_data()
{
   $sql = "SELECT tbl_keaktifan.*, nama_member, no_tlp FROM tbl_keaktifan INNER JOIN tbl_member ON tbl_keaktifan.id_aktif = tbl_member.id_member";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) { 
    $baris[] = $obj;
   }
   if(!empty($baris)){
    return $baris;
   }
}


}
