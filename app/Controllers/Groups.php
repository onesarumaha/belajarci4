<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;

// cara 1 untuk memanggil file modelnya
use App\Models\GroupModel;

class Groups extends ResourcePresenter
{
    // cara 1 untuk memanggil file modelnya 
    function __construct() {
        $this->group = new GroupModel();
    }

    // protected $modelName = 'App\Models\GroupModel';
    protected $helpers = ['Custome'];
    

    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['title'] = "Data Groups";
        $data['groups'] = $this->group->findAll();
        // $data['groups'] = $this->model->findAll();
        echo view('fontend/header', $data);
        echo view('fontend/sidebar');
        echo view('fontend/topbar');
        echo view('fontend/box');
        echo view('groups/index', $data);
        echo view('fontend/footer');
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        $data['title'] = "Tambah Data Groups";
        echo view('fontend/header', $data);
        echo view('fontend/sidebar');
        echo view('fontend/topbar');
        echo view('fontend/box');
        echo view('groups/new');
        echo view('fontend/footer');
        
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        // memperoses tambah data file new

        $data = $this->request->getPost();
        $this->group->insert($data);
        return redirect()->to(base_url('groups'))->with('success', 'Data Berhasil Disimpan');

        // sebelum di run, cek di model nya. harus isi $allowedFields sesuai file form

    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data['title'] = "Edit Data Groups";
        $group = $this->group->where('id_group', $id)->first();

        if(is_object($group)) {
            $data['group'] = $group;
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        echo view('fontend/header', $data);
        echo view('fontend/sidebar');
        echo view('fontend/topbar');
        echo view('fontend/box');
        echo view('groups/edit', $data);
        echo view('fontend/footer');
        
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {

        $data = $this->request->getPost();
        $this->group->update($id, $data);
        return redirect()->to(base_url('groups'))->with('success', 'Data Berhasil Diupdate');
        
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->group->where('id_group',$id)->delete();
        return redirect()->to(base_url('groups'))->with('success', 'Data Berhasil Dihapus');
    }

    public function trash()
    {
        $data['title'] = "Data Trash Groups";
        $data['groups'] = $this->group->onlyDeleted()->findAll();
        // $data['groups'] = $this->model->findAll();
        echo view('fontend/header', $data);
        echo view('fontend/sidebar');
        echo view('fontend/topbar');
        echo view('fontend/box');
        echo view('groups/trash', $data);
        echo view('fontend/footer');
    }

    public function restore($id = null)
    {
        $this->db = \Config\Database::connect();

        if($id != null) {
            // $this->group->update($id, ['deleted_at' => null]);
            $this->db->table('groups')
                    ->set('deleted_at', null, true)
                    ->where(['id_group' => $id])
                    ->update();
            
        }else{
            $this->db->table('groups')
                    ->set('deleted_at', null, true)
                    ->where('deleted_at is NOT NULL', NULL, FALSE )
                    ->update();
        }
        if($this->db->affectedRows() > 0) {
            return redirect()->to(base_url('groups'))->with('success', 'Data Berhasil Direstore');
        }
    }

     public function delete2($id = null)
    {
        if($id != null) {
            $this->group->delete($id, true);
            return redirect()->to(base_url('groups/trash'))->with('success', 'Data Berhasil Dihapus Permanent');
        }else{
            $this->group->purgeDeleted($id, true);
            return redirect()->to(base_url('groups/trash'))->with('success', 'Data Berhasil Dihapus Permanent');
        }
       
    }


}
