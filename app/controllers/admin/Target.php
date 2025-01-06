<?php

class Target extends Controller
{
    public function index()
    {
        $data = [];
        $header['title'] = 'Target';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/target/index', $data);
        $this->view('templates/admin_footer');
    }
}