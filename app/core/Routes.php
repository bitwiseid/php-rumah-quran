<?php

$routes = [
    'admin' => [
        'login' => 'login@index',
        'login/autentikasi'             => 'login@autentikasi',
        'logout'                        => 'logout@index',
        'dashboard' => 'dashboard@index',
        'user' => accessRoute(['admin'], 'user@index'),
        'user/delete' => accessRoute(['admin'], 'user@deleteUser'),
        'user/quran' => accessRoute(['admin'], 'user@createUpdateUser'),
        'guru' => accessRoute(['admin'], 'guru@index'),
        'guru/quran' => accessRoute(['admin'], 'guru@createUpdateGuru'),
        'guru/delete' => accessRoute(['admin'], 'guru@deleteGuru'),
        'hafalan' => accessRoute(['admin', 'guru'], 'hafalan@index'),
        'hafalan/createUpdateHafalan' => accessRoute(['admin', 'guru'], 'hafalan@createUpdateHafalan'),
        'hafalan/deleteHafalan' => accessRoute(['admin', 'guru'], 'hafalan@deleteHafalan'),
        'laporan' => accessRoute(['admin'], 'laporan@index'),
        'laporan/getPrintData' => accessRoute(['admin'], 'laporan@getPrintData'),
        'orang_tua' => accessRoute(['admin'], 'orang_tua@index'),
        'orang_tua/quran' => accessRoute(['admin'], 'orang_tua@createUpdateOrangTua'),
        'orang_tua/delete' => accessRoute(['admin'], 'orang_tua@deleteOrangTua'),
        'orang_tua/monitoring' => accessRoute(['admin', 'orang tua', 'guru'], 'orang_tua@monitoring'),
        'orang_tua/monitoring_detail' => accessRoute(['admin', 'orang tua', 'guru'], 'orang_tua@monitoring_detail'),
        'santri' => accessRoute(['admin'], 'santri@index'),
        'santri/quran' => accessRoute(['admin'], 'santri@createUpdateSantri'),
        'santri/delete' => accessRoute(['admin'], 'santri@deleteSantri'),
        'target' => accessRoute(['admin'], 'target@index'),
        'target/createUpdateTarget' => accessRoute(['admin'], 'target@createUpdateTarget'),
        'target/deleteTarget' => accessRoute(['admin'], 'target@deleteTarget'),
    ]
];

return $routes;

function accessRoute($roles, $routes)
{
    try {
        $role =  $_SESSION['role'] ?? "";
        if (in_array($role, $roles)) {
            return $routes;
        }
    } catch (Exception $e) {
        return 'Dashboard@notFound';
    }
    return 'Dashboard@notFound';
}
