<?php

class Login extends Controller
{
    public function index()
    {
        $data = [];
        $header['title'] = 'Login';
        $this->view('templates/admin_header', $header);
        $this->view('admin/login/index', $data);
        $this->view('templates/admin_footer');
    }
}