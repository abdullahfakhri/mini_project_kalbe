<?php

$title = 'Master Parameter';

include 'layout/header.php';

$data_m_ca_parameters = select("SELECT * FROM m_ca_parameters");

?>

  <div class="container mt-5">
    <h1 class="mb-5">Master Parameter</h1>

    <a href="tambah_parameter.php" class="btn btn-success mb-1">Add</a>

    <table class="table table-striped mt-3" id="table">
      <thead class="table">
        <tr>
          <th>Code</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <?php $no = 1;?>
        <?php foreach ($data_m_ca_parameters as $m_ca_parameters) : ?>
        <tr>
          <td><?php echo $m_ca_parameters['code']; ?></td>
          <td><?php echo $m_ca_parameters['description']; ?></td>
          <td width="15%" class="text-center">
            <a href="edit_parameter.php?id=<?= $m_ca_parameters['id']; ?>" class="btn btn-success">Edit</a>
            <a href="delete_parameter.php?id=<?= $m_ca_parameters['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Data Parameter Dihapus?');">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  
<?php include 'layout/footer.php' ?>



