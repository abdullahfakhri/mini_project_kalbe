<?php

$title = 'Master Parameter';

include 'layout/header.php';

$data_m_ca_parameters = select("SELECT * FROM m_ca_parameters");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Master Parameter</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Master Parameter</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Master Parameter</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <a href="tambah_parameter.php" class="btn btn-success btn-sm mb-2"><i class="fas fa-plus"></i> Add</a>
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead class="table">
                                            <tr>
                                                <th>Code</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($data_m_ca_parameters as $m_ca_parameters): ?>
                                                <tr>
                                                    <td><?php echo $m_ca_parameters['code']; ?></td>
                                                    <td><?php echo $m_ca_parameters['description']; ?></td>
                                                    <td width="15%" class="text-center">
                                                        <a href="edit_parameter.php?id=<?= $m_ca_parameters['id']; ?>"
                                                            class="btn btn-success">Edit</a>
                                                        <a href="delete_parameter.php?id=<?= $m_ca_parameters['id']; ?>"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Yakin Data Parameter Dihapus?');">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php' ?>