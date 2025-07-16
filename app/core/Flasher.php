<?php
session_status() === PHP_SESSION_NONE && session_start();
class Flasher
{

    /**
     * Membuat flash message yang akan ditampilkan di halaman
     * 
     * @param boolean $status status true jika berhasil, false jika gagal
     * @param string $teks teks yang akan ditampilkan
     * @return void
     */
    public static function setFlash($status, $teks)
    {
        $_SESSION['flash'] = [
            'title' => $status ? "Sukses" : "Gagal",
            'teks' => $teks,
            'tipe' => $status ? "success" : "error"
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo "
            <script>
            Swal.fire({
              title: '" . $_SESSION['flash']['title'] . "',
              text: '" . $_SESSION['flash']['teks'] . "',
              icon: '" . $_SESSION['flash']['tipe'] . "'
            });
            </script>
            ";
            unset($_SESSION['flash']);
        }
    }
}
