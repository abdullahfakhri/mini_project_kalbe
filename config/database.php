<?php
// parameter yang diisi ('hostname', 'usermame', 'pasword', 'nama database')
$db = mysqli_connect('localhost', 'root', '', 'mini_project_kalbe');

//cek conetion
// if (!$db) {
//     echo 'gagal';
// } else {
//     echo 'berhasil';
// }