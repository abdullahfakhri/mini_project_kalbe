<?php

$title = 'Edit Parameter';

include 'layout/header.php';

//mengambil id dari URL
$id = (int)$_GET['id'];

$m_ca_parameters = select("SELECT * FROM m_ca_parameters WHERE ID = $id")[0];

//cek apakah tombol edit ditekan
if (isset($_POST['edit'])) {
    if (Update_m_ca_parameters($_POST) > 0) {
        echo "<script>
                alert('Data Parameters Berhasil Diedit');
                document.location.href = 'index.php';      
        </script>";
    } else {
        echo "<script>
                alert('Data Parameters Gagal Diedit');
                document.location.href = 'index.php';      
        </script>";
    }
}

?>

<div class="container mt-5">
    <h1 class="mb-5">Edit Master Parameter</h1>

    <form action="" method="post">

        <input type="hidden" name="id" value="<?= $m_ca_parameters['id'];?>">
        
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" name="code" value="<?= $m_ca_parameters['code']; ?>" placeholder="Input Code..." required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="<?= $m_ca_parameters['description']; ?>" placeholder="Input Description..." required>
        </div>

        <button type="submit" name="edit" class="btn btn-success" style="float: right;">Edit</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>