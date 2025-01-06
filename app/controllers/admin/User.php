<?php

class User extends Controller
{
    public function index()
    {
        $data = [];
        $header['title'] = 'User';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/user/index', $data);
        $this->view('templates/admin_footer');
    }
}