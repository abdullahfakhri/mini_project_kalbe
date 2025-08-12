<?php

$title = 'Tambah sample type';

include 'layout/header.php';

//cek apakah tombol add ditekan
if (isset($_POST['add'])) {
    if (create_m_ca_sample_types($_POST) > 0) {
        echo "<script>
                alert('Data Sample Type Berhasil Ditambahkan');
                document.location.href = 'master_sample_type.php';      
        </script>";
    } else {
        echo "<script>
                alert('Data Sample Type Gagal Ditambahkan');
                document.location.href = 'master_sample_type.php';      
        </script>";
    }
}

?>

<div class="container mt-5">
    <h1 class="mb-5">Add Master Sample Type</h1>

    <form action="" method="post">
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Input Code..." required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                placeholder="Input Description..." required>
        </div>

        <div class="mb-3">
            <label for="createdby" class="form-label">Created By</label>
            <input type="text" class="form-control" id="createdby" name="createdby"
                placeholder="Input Created By..." required>
        </div>

        <button type="submit" name="add" class="btn btn-success" style="float: right;">Add</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>