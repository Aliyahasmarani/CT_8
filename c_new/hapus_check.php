<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION['login'])) {
    echo "<script>
    alert('Diharapkan Login Terlebih Dahulu')
    document.location.href = 'login.php';
    </script>";
    exit;
}

include 'config/app.php';
// menerima id akun yang dipilih pengguna
$id_checklist = (int)$_GET['id_checklist'];

if (delete_checklist($id_checklist) > 0) {
    echo "<script>
        alert('Data checklist Berhasil DIhapus');
        document.location.href = 'check_toilet.php';
        </script>";
} else {
    echo "<script>
        alert('Data checklist Gagal DIhapus');
        document.location.href = 'check_toilet.php';
        </script>";
}
