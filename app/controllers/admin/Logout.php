<?php
class Logout extends Controller
{
    public function index()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        header('Location: ' . BASEURL_ADMIN);
        exit();
    }
}
