<?php 
include 'model.php'; 
$model = new Model(); 
$index = 1; 
?> 
<!doctype html> 
<html lang="en">  
  <head> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>  
<body> 
<?php
  include 'navbar.php';
  ?>
 

<div class="container">
      <h1><center>Data Masa Aktif Member</center></h1>  
      <br> 
      <a href="create_keaktifan.php"><input type="button" value="Tambah Data"></a>
      
      <br><br> 
      <table class="table table-bordered table-striped"> 
          <thead class="text-center"> 
            <tr bgcolor="0670e2"> 
                <th>No.           </th> 
                <th>Id Aktif      </th> 
                <th>Nama Member   </th> 
                <th>Tanggal Masuk </th> 
                <th>Tanggal Keluar</th>
                <th>Masa Aktif    </th>
                <th>Aksi          </th> 
            </tr> 
          </thead> 
          <tbody class="text-center"> 
                <?php
                $result = $model->tampil_data_keaktifan();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id_aktif ?></td> 
                            <td><?= $data->nama_member ?></td> 
                            <td><?= $data->tgl_masuk ?></td>
                            <td><?= $data->tgl_keluar ?></td>
                            <td><?= $data->masa_aktif ?></td>
                            <td>
                            <a name="edit" id="edit" href="edit_keaktifan.php?id=<?= $data->id_aktif ?>"><input type="button" value="Edit">
                            </a>
                            <a name="hapus" id="hapus" href="process.php?aktif_id=<?= $data->id_aktif ?>"><input type="button" value="Delete">
                            </a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel data member base gym.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>