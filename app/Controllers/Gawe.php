<?php

namespace App\Controllers;

class Gawe extends BaseController
{
    public function index()
    {
        $data['title'] = 'One Sarumaha | Gawe';
        
        // cara pertama dengan query builder
        $builder = $this->db->table('gawe');
        $query   = $builder->get()->getResult();
        $data['gawe'] = $query;

        echo view('fontend/header', $data);
        echo view('fontend/sidebar');
        echo view('fontend/topbar');
        echo view('fontend/box');
        echo view('gawe/index', $data);
        echo view('fontend/footer');
    }
}
