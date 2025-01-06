<?php

class Guru extends Controller
{
    public function index()
    {
        $data = [];
        $header['title'] = 'Guru';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/guru/index', $data);
        $this->view('templates/admin_footer');
    }
}