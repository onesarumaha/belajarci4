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
        if(session('id_user')) {
            return redirect()->to(base_url('/'));
        }
        return view('auth/login');
        
    }

    public function loginproses()
    {
        $post = $this->request->getPost();

        $query = $this->db->table('users')->getWhere(['email_user' => $post['email_user']]);
        $user = $query->getRow();
        if($user) {
            if(password_verify($post['password_user'], $user->password_user)) 
            {
                $param = [
                    'id_user' => $user->id_user,
                ];
                session()->set($param);
                 return redirect()->to(base_url('/'));

            }else{
                 return redirect()->back()->with('error', 'Password Salah!');
            }
        }else{
        return redirect()->back()->with('error', 'Email Tidak ditemukan!');

        }
        
    }

    public function logout()
    {
        session()->remove('id_user');
        return redirect()->to(base_url('login'));
        
        
    }




}
