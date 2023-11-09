<?php

namespace App\Controllers;

class Controller 
{
    public function view($view, $data = [])
    {
        extract($data);
        require_once $_SERVER['DOCUMENT_ROOT'] . "/app/Views/{$view}.php";
    }

    public function redirect($url)
    {
        header("Location: {$url}");
    }
}