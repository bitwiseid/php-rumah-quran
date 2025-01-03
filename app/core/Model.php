<?php

class Model{
    protected $db;

    public function __construct() {
        $this->db = new Database();
    }
    
// ditambahkan 
    public function model($model){
        require_once '../app/models/' .$model. '.php';
        return new $model;
    }
}