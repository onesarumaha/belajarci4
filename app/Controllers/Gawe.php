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

    public function create()
    {
        $data['title'] = 'One Sarumaha | Add';

        echo view('fontend/header', $data);
        echo view('fontend/sidebar');
        echo view('fontend/topbar');
        echo view('fontend/box');
        echo view('gawe/add');
        echo view('fontend/footer');
    }

    public function store()
    {
        $data['title'] = 'One Sarumaha | Add';

        // cara mudah : nama field sama dengan nama form
        // $data = $this->request->getPost();

        // cara dua : menggunakan spesifik form

        $data = [
            'name_gawe' => $this->request->getVar('name_gawe'),
            'date_gawe' => $this->request->getVar('date_gawe'),
            'info_gawe' => $this->request->getVar('info_gawe'),
        ];

        $this->db->table('gawe')->insert($data);

        if($this->db->affectedRows() > 0){
            return redirect()->to(base_url('gawe'))->with('success', 'Data Berhasil Disimpan');
        }

        
    }

    public function edit($id = null)
    {
        if($id != null ) {
            $query = $this->db->table('gawe')->getWhere(['id_gawe' => $id]);
            if($query->resultID->num_rows > 0) {
            // echo "Lanjut";
                $data['title'] = 'One Sarumaha | Edit';
                $data['gawe'] = $query->getRow();

                echo view('fontend/header', $data);
                echo view('fontend/sidebar');
                echo view('fontend/topbar');
                echo view('fontend/box');
                echo view('gawe/edit', $data);
                echo view('fontend/footer');
            }else{
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id = null ) 
    {
        // cara 1
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('gawe')->where(['id_gawe' => $id])->update($data);

        return redirect()->to(base_url('gawe'))->with('success', 'Data Berhasil Diedit');

    }

    public function destroy($id)
    {
        $this->db->table('gawe')->where(['id_gawe' => $id])->delete();

        return redirect()->to(base_url('gawe'))->with('success', 'Data Berhasil Dihapus');
    }











}
