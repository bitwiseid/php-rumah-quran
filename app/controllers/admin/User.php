<?php

class User extends Controller
{
    public function index()
    {
        $data['user'] = $this->model('User_model')->getUser();
        $header['title'] = 'User';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/user/index', $data);
        $this->view('templates/admin_footer');
    }
    public function createUpdateUser()
    {
        $issetId = $_POST['id'] !== "";

        $isSuccess = ($issetId ? $this->model('User_model')->editUser($_POST) : $this->model('User_model')->createUser($_POST)) > 0;
        Flasher::setFlash($isSuccess, $issetId ? "Diubah" : 'Ditambahkan');
        header('Location: ' . BASEURL_ADMIN . '/user');
        exit;
    }
    public function deleteUser($id_user)
    {
        $isSuccess = $this->model('User_model')->deleteUser($id_user) > 0;
        Flasher::setFlash($isSuccess, "Dihapus");
        header('Location: ' . BASEURL_ADMIN . '/user');
        exit;
    }
}
