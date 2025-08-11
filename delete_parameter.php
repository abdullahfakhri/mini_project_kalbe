<?php

include 'config/app.php';

//menerima id parameter
$id = (int) $_GET["id"];

if (delete_m_ca_parameters($id) > 0) {
    echo "<script>
            alert('Data Parameter Berhasil Dihapus');
            document.location.href = 'index.php';
    </script>";

} else {
    echo "<script>
    alert('Data Parameter Gagal Dihapus');
            document.location.href = 'index.php';
    </script>";
}