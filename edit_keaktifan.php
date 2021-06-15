<?php
$id_aktif = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_keaktifan($id_aktif);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Keaktifan Member Base Gym</title>
</head>

<body>
<?php
  include 'navbar.php';
  ?>
    <h1>Edit Data Keaktifan Member Base Gym</h1>
    <a href="keaktifan.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
    <div class="col-3">
    <div class="mb-3">
    <label class="form=label">ID Aktif</label>
    <input type="text" name="id_aktif" value="<?= $data->id_aktif ?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
    <label class="form=label">Nama Member</label>
    <input type="text" name="nama_member" value="<?= $data->nama_member ?>" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form=label">Tanggal Masuk</label>
    <input type="date" name="tgl_masuk" value="<?= $data->tgl_masuk?>" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form=label">Tanggal Keluar</label>
    <input type="date" name="tgl_keluar" value="<?= $data->tgl_keluar?>" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form=label">Masa Aktif</label>
    <input type="text" name="masa_aktif" value="<?= $data->masa_aktif?>" class="form-control">
    </div>

    <button type="submit" name="submit_edit_keaktifan" class="btn btn-success">SUBMIT</button>
    <button type="reset" class="btn btn-danger">CANCEL</button>
   </div>
    </form>
</body>

</html>