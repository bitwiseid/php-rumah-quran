<?php

function stringToRupiah(?string $string): string
{
    if ($string === null) {
        return '-';
    }

    $numericString = preg_replace('/\D/', '', $string);
    return 'Rp ' . number_format($numericString, 0, ',', '.');
}

function isAdmin(): bool
{
    return $_SESSION['role'] === ROLE_ADMIN;
}

function isOrangTua(): bool
{
    return $_SESSION['role'] === ROLE_ORANGTUA;
}

function isGuru(): bool
{
    return $_SESSION['role'] === ROLE_GURU;
}
