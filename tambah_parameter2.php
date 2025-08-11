<?php

$title = 'Tambah Parameter';

include 'layout/header.php';

//cek apakah tombol add ditekan
if (isset($_POST['add'])) {
    if (create_m_ca_parameters($_POST) > 0) {
        echo "<script>
                alert('Data Parameters Berhasil Ditambahkan');
                document.location.href = 'index.php';      
        </script>";
    } else {
        echo "<script>
                alert('Data Parameters Gagal Ditambahkan');
                document.location.href = 'index.php';      
        </script>";
    }
}

?>

<div class="container mt-5">
    <h1 class="mb-5">Add Master Parameter</h1>

    <form action="" method="post">
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Input Code..." required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Input Description..." required>
        </div>

        <button type="submit" name="add" class="btn btn-success" style="float: right;">Add</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>