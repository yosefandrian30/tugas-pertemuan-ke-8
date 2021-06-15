<?php
include 'model.php';
//tbl member
if (isset($_POST['submit_simpan_member'])) {
 $id_member = $_POST['id_member'];
 $nama_member = $_POST['nama_member'];
 $no_tlp = $_POST['no_tlp'];
 $alamat = $_POST['alamat'];
 $model = new Model();
 $model->insert_member($id_member, $nama_member, $no_tlp, $alamat);
 header('location:member.php');
}
if (isset($_POST['submit_edit_member'])) {
  $id_member = $_POST['id_member'];
  $nama_member = $_POST['nama_member'];
  $no_tlp = $_POST['no_tlp'];
  $alamat = $_POST['alamat'];
  $model = new Model();
  $model->update_member($id_member, $nama_member, $no_tlp, $alamat);
  header('location:member.php');
}
if (isset($_GET['member_id'])) {
 $id_member = $_GET['member_id'];
 $model = new Model();
 $model->delete_member($id_member);
 header('location:member.php');
}

//tbl keaktifan
if (isset($_POST['submit_simpan_keaktifan'])) {
 $id_aktif = $_POST['id_aktif'];
 $nama_member = $_POST['nama_member'];
 $tgl_masuk = $_POST['tgl_masuk'];
 $tgl_keluar = $_POST['tgl_keluar'];
 $masa_aktif = $_POST['masa_aktif'];
 $model = new Model();
 $model->insert_keaktifan($id_aktif, $nama_member, $tgl_masuk, $tgl_keluar, $masa_aktif);
 header('location:keaktifan.php');
}
if (isset($_POST['submit_edit_keaktifan'])) {
  $id_aktif = $_POST['id_aktif'];
  $nama_member = $_POST['nama_member'];
  $tgl_masuk = $_POST['tgl_masuk'];
  $tgl_keluar = $_POST['tgl_keluar'];
  $masa_aktif = $_POST['masa_aktif'];
  $model = new Model();
  $model->update_keaktifan($id_aktif, $nama_member, $tgl_masuk, $tgl_keluar, $masa_aktif);
  header('location:keaktifan.php');
}
if (isset($_GET['aktif_id'])) {
 $id_aktif = $_GET['aktif_id'];
 $model = new Model();
 $model->delete_keaktifan($id_aktif);
 header('location:keaktifan.php');
}

