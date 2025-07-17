<?php

$routes = [
    'admin' => [
        'login' => 'login@index',
        'login/autentikasi'             => 'login@autentikasi',
        'logout'                        => 'logout@index',
        'dashboard' => 'dashboard@index',
        'user' => 'user@index',
        'user/delete' => 'user@deleteUser',
        'user/quran' => 'user@createUpdateUser',
        'guru' => 'guru@index',
        'guru/quran' => 'guru@createUpdateGuru',
        'guru/delete' => 'guru@deleteGuru',
        'hafalan' => 'hafalan@index',
        'hafalan/createUpdateHafalan' => 'hafalan@createUpdateHafalan',
        'hafalan/deleteHafalan' => 'hafalan@deleteHafalan',
        'laporan' => 'laporan@index',
        'laporan/getPrintData' => 'laporan@getPrintData',
        'orang_tua' => 'orang_tua@index',
        'orang_tua/quran' => 'orang_tua@createUpdateOrangTua',
        'orang_tua/delete' => 'orang_tua@deleteOrangTua',
        'santri' => 'santri@index',
        'santri/quran' => 'santri@createUpdateSantri',
        'santri/delete' => 'santri@deleteSantri',
        'target' => 'target@index',
        'target/createUpdateTarget' => 'target@createUpdateTarget',
        'target/deleteTarget' => 'target@deleteTarget',
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
        return 'Not_Found@index';
    }
    return 'Not_Found@index';
}