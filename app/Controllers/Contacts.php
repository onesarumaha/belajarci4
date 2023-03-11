<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\GroupModel;
use App\Models\ContactModel;

class Contacts extends ResourceController
{
    protected $helpers = ['Custome'];

    function __construct() {
        $this->group = new GroupModel();
        $this->contact = new ContactModel();
    }


    public function index()
    {
        $data['title'] = "Data Kontak";

        $data['contacts'] = $this->contact->getAll();

        return view('fontend/header', $data)
            . view('fontend/sidebar')
            . view('fontend/topbar')
            . view('fontend/box')
            . view('contact/index', $data)
            . view('fontend/footer');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
         $data['title'] = "New Kontak";
         $data['groups'] = $this->group->findAll();

         return view('fontend/header', $data)
            . view('fontend/sidebar')
            . view('fontend/topbar')
            . view('fontend/box')
            . view('contact/new', $data)
            . view('fontend/footer');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->contact->insert($data);
        return redirect()->to(base_url('contacts'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
         $data['title'] = "Edit Kontak";

         return view('fontend/header', $data)
            . view('fontend/sidebar')
            . view('fontend/topbar')
            . view('fontend/box')
            . view('contact/edit')
            . view('fontend/footer');
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
