<?php

class Hafalan extends Controller
{
    public function index()
    {
        $data = [];
        $header['title'] = 'Hafalan';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/hafalan/index', $data);
        $this->view('templates/admin_footer');
    }
}