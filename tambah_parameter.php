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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><ia class ="fas fa-plus"></ia> Add parameter</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Edit Parameter</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
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

                <button type="submit" name="add" class="btn btn-success" style="float: right;">Add</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>