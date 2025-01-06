<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data = [];
        $header['title'] = 'Dashboard';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/dashboard/index', $data);
        $this->view('templates/admin_footer');
    }
}