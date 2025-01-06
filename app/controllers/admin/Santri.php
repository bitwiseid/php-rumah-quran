<?php

class Santri extends Controller
{
    public function index()
    {
        $data = [];
        $header['title'] = 'Santri';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/santri/index', $data);
        $this->view('templates/admin_footer');
    }
}