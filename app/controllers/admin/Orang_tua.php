<?php

class Orang_tua extends Controller
{
    public function index()
    {
        $data = [];
        $header['title'] = 'Orang Tua';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/orang_tua/index', $data);
        $this->view('templates/admin_footer');
    }
}