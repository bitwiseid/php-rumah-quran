<?php

class Laporan extends Controller
{
    public function index()
    {
        $data = [];
        $header['title'] = 'Laporan';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/laporan/index', $data);
        $this->view('templates/admin_footer');
    }
}