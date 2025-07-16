<?php

class Login extends Controller
{
    public function index()
    {

        $header['title'] = 'Login';
        $this->view('templates/admin_header', $header);
        $this->view('admin/login/index');
        $this->view('templates/admin_footer');
    }

    public function autentikasi()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->model('Login_model')->getUserByUsername($username);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];

                    Flasher::setFlash(true, 'Login Berhasil');
                    header('Location: ' . BASEURL_ADMIN);
                } else {
                    Flasher::setFlash(false, 'Password salah');
                    header('Location: ' . BASEURL_ADMIN . '/login');
                }
            } else {
                Flasher::setFlash(false, 'Username tidak ditemukan');
                header('Location: ' . BASEURL_ADMIN . '/login');
            }
            exit();
        }
    }
}
