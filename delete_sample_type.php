<?php

include 'config/app.php';

//menerima id sample type
$id = (int) $_GET["id"];

if (delete_m_ca_sample_types($id) > 0) {
    echo "<script>
            alert('Data Sample Type Berhasil Dihapus');
            document.location.href = 'master_sample_type.php';
    </script>";

} else {
    echo "<script>
    alert('Data Sample Type Gagal Dihapus');
            document.location.href = 'master_sample type.php';
    </script>";
}