<?php

$title = 'Master sample type';

include 'layout/header.php';

//menampilkan data sample type
$data_m_ca_sample_types = select("SELECT * FROM m_ca_sample_types");

?>

<div class="container mt-5">
  <h1 class="mb-5">Master Sample Type</h1>

  <a href="tambah_sample_type.php" class="btn btn-success mb-1">Add</a>

  <table class="table table-striped mt-3" id="table">
    <thead class="table">
      <tr>
        <th>Code</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($data_m_ca_sample_types as $m_ca_sample_types): ?>
        <tr>
          <!-- <td><?= $no++; ?></td> -->
          <td><?= $m_ca_sample_types['code'] ?></td>
          <td><?= $m_ca_sample_types['description'] ?></td>
          <td width="15%" class="text-center">

            <a href="edit_sample_type.php?id=<?= $m_ca_sample_types['id']; ?>" class="btn btn-success">Edit</a>

            <a href="delete_sample_type.php?id=<?= $m_ca_sample_types['id']; ?>" class="btn btn-danger"
              onclick="return confirm('Yakin Data Sample Type Dihapus?');">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php include 'layout/footer.php'; ?>