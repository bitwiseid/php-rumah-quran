<?php

class Orang_tua extends Controller
{
    public function index()
    {
        $data['orang_tua'] = $this->model('Orang_tua_model')->getOrang_tua();
        $data['user'] = $this->model('User_model')->getNamaOrangTua();
        $header['title'] = 'Orang Tua';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/orang_tua/index', $data);
        $this->view('templates/admin_footer');
    }

    public function createUpdateOrangTua()
    {
        $issetId = $_POST['id'] !== "";

        $isSuccess = ($issetId ? $this->model('Orang_tua_model')->editOrangTua($_POST) : $this->model('Orang_tua_model')->createOrangTua($_POST)) > 0;
        Flasher::setFlash($isSuccess, $issetId ? "Diubah" : 'Ditambahkan');
        header('Location: ' . BASEURL_ADMIN . '/orang_tua');
        exit;
    }

    public function deleteOrangTua($id_orang_tua)
    {
        $isSuccess = $this->model('Orang_tua_model')->deleteOrangTua($id_orang_tua) > 0;
        Flasher::setFlash($isSuccess, "Dihapus");
        header('Location: ' . BASEURL_ADMIN . '/orang_tua');
        exit;
    }
}
