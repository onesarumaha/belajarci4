<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('fontend/header');
        echo view('fontend/sidebar');
        echo view('fontend/topbar');
        echo view('home');
        echo view('fontend/footer');
    }
}
