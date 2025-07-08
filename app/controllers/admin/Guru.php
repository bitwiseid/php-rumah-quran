<?php

class Guru extends Controller
{
    public function index()
    {
        $data['guru_user'] = $this->model('User_model')->getNamaGuru();
        $data['guru'] = $this->model('Guru_model')->getGuru();
        $header['title'] = 'Guru';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/guru/index', $data);
        $this->view('templates/admin_footer');
    }

    public function createUpdateGuru()
    {

        $issetId = isset($_POST['id']) && $_POST['id'] !== "";

        $isSuccess = ($issetId ? $this->model('Guru_model')->editGuru($_POST) : $this->model('Guru_model')->createGuru($_POST)) > 0;
        Flasher::setFlash($isSuccess, $issetId ? "Diubah" : 'Ditambahkan');
        header('Location: ' . BASEURL_ADMIN . '/guru');
        exit;
    }

    public function deleteGuru($id_guru)
    {
        $isSuccess = $this->model('Guru_model')->deleteGuru($id_guru) > 0;
        Flasher::setFlash($isSuccess, "Dihapus");
        header('Location: ' . BASEURL_ADMIN . '/guru');
        exit;
    }
}
