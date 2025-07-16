<?php

class Target extends Controller
{
    public function index()
    {
        $data['target'] = $this->model('Target_model')->getTarget();
        $data['santri'] = $this->model('Santri_model')->getSantri();

        $header['title'] = 'Target';

        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/target/index', $data);
        $this->view('templates/admin_footer');
    }

    public function createUpdateTarget()
    {
        $issetId = isset($_POST['id_target']) && $_POST['id_target'] !== "";

        $data = [
            'id_target' => $_POST['id_target'] ?? null,
            'id_santri' => $_POST['id_santri'],
            'target_bulanan' => $_POST['target_bulanan'],
            'bulan' => $_POST['bulan'],
            'tahun' => $_POST['tahun']
        ];

        $isSuccess = ($issetId ?
            $this->model('Target_model')->updateTarget($data) :
            $this->model('Target_model')->createTarget($data)) > 0;

        Flasher::setFlash($isSuccess, $issetId ? "Diubah" : 'Ditambahkan');
        header('Location: ' . BASEURL_ADMIN . '/target');
        exit;
    }

    public function deleteTarget($id_target)
    {
        $isSuccess = $this->model('Target_model')->deleteTarget($id_target) > 0;
        Flasher::setFlash($isSuccess, "Dihapus");
        header('Location: ' . BASEURL_ADMIN . '/target');
        exit;
    }
}
