<?php

class Orang_tua extends Controller
{
    public function index()
    {
        $orang_tua = $this->model('Orang_tua_model')->getOrang_tua();
        $data['user'] = $this->model('User_model')->getNamaOrangTua();


        $data['orang_tua'] = array_reduce($orang_tua, function ($carry, $item) {
            $carry[$item['id_orang_tua']]['id_orang_tua'] = $item['id_orang_tua'];
            $carry[$item['id_orang_tua']]['nama_orang_tua'] = $item['nama_orang_tua'];
            $carry[$item['id_orang_tua']]['alamat'] = $item['alamat'];
            $carry[$item['id_orang_tua']]['role'] = $item['role'];
            $carry[$item['id_orang_tua']]['santri'][] = $item['nama_anak'];
            $carry[$item['id_orang_tua']]['id_user'] = $item['id_user'];

            return $carry;
        }, []);

        $header['title'] = 'Orang Tua';

        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/orang_tua/index', $data);
        $this->view('templates/admin_footer');
    }

    public function createUpdateOrangTua()
    {
        $issetId = $_POST['id'] !== "";

        var_dump($_POST);

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
