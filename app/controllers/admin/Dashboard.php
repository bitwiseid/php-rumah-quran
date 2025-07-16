<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['TotalUser'] = $this->model('User_model')->getTotalUser();
        $data['TotalSantri'] = $this->model('Santri_model')->getTotalSantri();
        $data['TotalGuru'] = $this->model('Guru_model')->getTotalGuru();
        $header['title'] = 'Dashboard';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/dashboard/index', $data);
        $this->view('templates/admin_footer');
    }
}