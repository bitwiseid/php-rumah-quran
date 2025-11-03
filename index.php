<?php
if (!session_id())
    session_start();

// Mengalihkan ke halaman admin
header('Location: admin/');
exit;

// Kode di bawah ini tidak akan dijalankan karena sudah dialihkan
// require_once "app/init.php";
// $app = new AdminApp();