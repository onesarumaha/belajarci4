<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {   
        return redirect()->to(base_url('login'));
        
    }

    public function login()
    {
        return view('auth/login');
        
    }

    public function loginproses()
    {
        $post = $this->request->getPost();

        $query = $this->db->table('users')->getWhere(['email_user' => $post['email_user']]);
        $user = $query->getRow();
        if($user) {
            echo "lanjut";
        }else{
        return redirect()->back()->with('error', 'Email Tidak ditemukan!');

        }


        
    }
}
