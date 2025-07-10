<?php

class Santri extends Controller
{
    public function index()
    {
        $data['santri_user'] = $this->model('User_model')->getNamaSantri();       // user santri
        $data['orang_tua'] = $this->model('User_model')->getNamaOrangTua(); // ambil id_orang_tua dan nama
        $data['santri'] = $this->model('Santri_model')->getSantri();

        $header['title'] = 'Santri';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/santri/index', $data);
        $this->view('templates/admin_footer');
    }


    public function createUpdateSantri()
    {
        // echo '<pre>';
        // var_dump($_POST); // Tampilkan semua data POST
        // echo '</pre>';
        // exit;

        $issetId = isset($_POST['id']) && $_POST['id'] !== "";

        $isSuccess = ($issetId ? $this->model('Santri_model')->editSantri($_POST) : $this->model('Santri_model')->createSantri($_POST)) > 0;
        Flasher::setFlash($isSuccess, $issetId ? "Diubah" : 'Ditambahkan');
        header('Location: ' . BASEURL_ADMIN . '/santri');
        exit;
    }

    public function deleteSantri($id_santri)
    {
        $isSuccess = $this->model('Santri_model')->deleteSantri($id_santri) > 0;
        Flasher::setFlash($isSuccess, "Dihapus");
        header('Location: ' . BASEURL_ADMIN . '/santri');
        exit;
    }
}
