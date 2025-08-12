<?php

$title = 'Edit sample type';

include 'layout/header.php';

//cek apakah tombol edit ditekan
if (isset($_POST['edit'])) {
    if (edit_m_ca_sample_types($_POST) > 0) {
        echo "<script>
                alert('Data Sample Type Berhasil Diedit');
                document.location.href = 'master_sample_type.php';      
        </script>";
    } else {
        echo "<script>
                alert('Data Sample Type Gagal Diedit');
                document.location.href = 'master_sample_type.php';      
        </script>";
    }
}

//ambil id sample type dari url
$id = (int)$_GET['id'];

//query ambil data sample type
$m_ca_sample_types = select("SELECT * FROM m_ca_sample_types WHERE id = $id")[0];



?>

<div class="container mt-5">
    <h1 class="mb-5">Edit Master Sample Type</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $m_ca_sample_types['id']; ?>">

        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Input Code..." required value="<?= $m_ca_sample_types['code'] ?>">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                placeholder="Input Description..." required value="<?= $m_ca_sample_types['description'] ?>">
        </div>

        <div class="mb-3">
            <label for="createdby" class="form-label">Created By</label>
            <input type="text" class="form-control" id="createdby" name="createdby"
                placeholder="Input Created By..." required value="<?= $m_ca_sample_types['created_by'] ?>">
        </div>

        <button type="submit" name="add" class="btn btn-success" style="float: right;">Add</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>