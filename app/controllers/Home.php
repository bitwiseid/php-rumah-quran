<?php

class Home extends Controller
{
    public function index()
    {  
        $data = [];
        $header['title'] = 'Home';
        $this->view('templates/header', $header);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}