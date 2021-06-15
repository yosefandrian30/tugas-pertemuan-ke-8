<?php
$id_member = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_member($id_member);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Member Base Gym</title>
</head>

<body>
<?php
  include 'navbar.php';
  ?>
    <h1>Edit Member Base Gym</h1>
    <a href="member.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
    <div class="col-3">
    <div class="mb-3">
    <label class="form=label">ID Member</label>
    <input type="text" name="id_member" value="<?= $data->id_member ?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
    <label class="form=label">Nama Member</label>
    <input type="text" name="nama_member" value="<?= $data->nama_member ?>" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form=label">No. Telepon</label>
    <input type="text" name="no_tlp" value="<?= $data->no_tlp?>" class="form-control">
    <div class="mb-3">
    <label class="form=label">Alamat</label>
    <input type="text" name="alamat" value="<?= $data->alamat?>" class="form-control">
    </div>

    <button type="submit" name="submit_edit_member" class="btn btn-success">SUBMIT</button>
    <button type="reset" class="btn btn-danger">CANCEL</button>
   </div>
  </form>
 </div>
    </form>
</body>

</html>